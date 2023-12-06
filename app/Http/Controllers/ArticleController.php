<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Models\Follower;
use App\Models\ArticleLike;
use Illuminate\Http\Request;
use App\Models\ArticleComments;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ArticleRequestValidation;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class ArticleController extends Controller
{
    function getData() {
        $profil = User::with(['profiles','followers'])->where('id',Auth::user()->id)->first();
        $totalFollower = Follower::where('id_follow',Auth::user()->id)->count();
        return [$profil,$totalFollower];
    }

    function detail($id) {
        $article = Article::with(['users','commentArticle','ArticleLike'])->find($id);
        if(Auth::user()) {
            $like = $article->articleLike->where('id_user',Auth::user()->id)->where('id_article',$id)->first();
        } else {
            $like = null;
        }
        if($article) {
            $article->view = $article->view + 1;
            $totalComment = $article->commentArticle->count();
            $totalLike = $article->articleLike->count();
            $article->update();
            return view('content.article',['article' => $article, 'totalComment' => $totalComment, 'like' => $like, 'totalLike' => $totalLike]);
        } else {
            return view('main.index');

        }
    }
    function nl2br($string) {
        return str_replace("\n", "<br />", $string);
    }

    function addComment(Request $request, $id) {
        $infoComment = [
            'id_user' => Auth::user()->id,
            'id_article' => $id,
            'content' => $request->content
        ];
        ArticleComments::create($infoComment);
        return redirect('/article/'.$id);
    }

    function addLike($id) {
        if(Auth::user()){
            $validasi = ArticleLike::where('id_user',Auth::user()->id)->where('id_article', $id)->first();
            if($validasi == null){
                $infoLike = [
                    'id_user' => Auth::user()->id,
                    'id_article' => $id,
                ];
                ArticleLike::create($infoLike);
                return redirect('/article/'.$id);
            } else {
                $validasi->delete();
                return redirect('/article/'.$id);
            }
        } else {
            return redirect('/article/'.$id);
        }
    }

    function getUploadArticle() {
        $data = $this->getData();
        return view('profile.upload-articleuser', ['follow' => false, 'profilUser' => true,'article' => null,'profil' => $data[0], 'totalFollower' => $data[1]]);
    }

    function uploadArticle(ArticleRequestValidation $request) {
        // Menghasilkan nama unik untuk file dengan menggunakan nama yang sudah diedit
        $imageName = Auth::user()->id . '_' . now()->format('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
        $imagePathFull = 'user/' . Auth::user()->id . '/images/article/'.$imageName;

        // Mengunggah gambar ke Cloudinary dengan menyertakan folder dan public_id
        $uploadedFile = Cloudinary::upload($request->file('image')->getRealPath(), [
            'folder' => 'user/' . Auth::user()->id . '/images/article',
            'public_id' => $imageName,
        ]);

        // Membuat artikel baru
        Article::create([
            'id_user' => Auth::user()->id,
            'image' =>  $uploadedFile->getSecurePath(),
            'title' => $request->title,
            'content' => $request->content,
            'view' => 0,
            'image_path' => $imagePathFull
        ]);

        return redirect('/profile-articleuser/'.Auth::user()->id)->with('success', 'Artikel berhasil diposting');
    }

    function deleteArticle($id) {
        if(Auth::user()) {
            $validasi = Article::where('id',$id)->where('id_user', Auth::user()->id)->first();
            if($validasi) {
                Cloudinary::destroy($validasi->image_path);
                $validasi->delete();
                return redirect('/profile-articleuser/'.Auth::user()->id)->with('success', 'Artikel berhasil dihapus');
            } else {
                return redirect('/profile-articleuser/'.Auth::user()->id)->withErrors('Artikel tidak di temukan');
            }
        } else {
            return redirect('/profile-articleuser/'.Auth::user()->id)->withErrors('Artikel tidak di temukan');
        }
    }

    function getEditArticle($id) {
        $validasi = Article::where('id_user',Auth::user()->id)->where('id', $id)->first();
        if($validasi) {
            $data = $this->getData();
            return view('profile.upload-articleuser', ['follow' => false ,'profilUser' => true, 'article' => $validasi, 'profil' => $data[0], 'totalFollower' => $data[1]]);
        } else {
            return redirect('/profile-articleuser/'.Auth::user()->id)->withErrors('Artikel tidak di temukan');

        }
    }

    function editArticle(Request $request, $id) {
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg|max:5048', // Sesuaikan dengan kebutuhan Anda
            'title' => 'required|string|max:35',
            'content' => 'required|string',
        ], [
            'image.required' => 'Gambar harus diisi.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar tidak valid. Gunakan format jpeg, png, atau jpg.',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 5MB.',
            'title.required' => 'Judul artikel harus diisi.',
            'title.string' => 'Judul harus berupa teks.',
            'title.max' => 'Judul tidak boleh melebihi :max karakter.',
            'content.required' => 'Isi artikel harus diisi.',
            'content.string' => 'Isi artikel harus berupa teks.',
        ]);

        $validasi = Article::where('id_user',Auth::user()->id)->where('id', $id)->first();
        if($validasi) {
            if($request->image != null) {
                Cloudinary::destroy($validasi->image_path);
                // Menghasilkan nama unik untuk file dengan menggunakan nama yang sudah diedit
                $imageName = Auth::user()->id . '_' . now()->format('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
                $imagePathFull = 'user/' . Auth::user()->id . '/images/article/'.$imageName;

                // Mengunggah gambar ke Cloudinary dengan menyertakan folder dan public_id
                $uploadedFile = Cloudinary::upload($request->file('image')->getRealPath(), [
                    'folder' => 'user/' . Auth::user()->id . '/images/article',
                    'public_id' => $imageName,
                ]);


                $validasi->image  =  $uploadedFile->getSecurePath();
                $validasi->title  = $request->title;
                $validasi->content = $request->content;
                $validasi->image_path = $imagePathFull;
                $validasi->update();

            } else {
                $validasi->title  = $request->title;
                $validasi->content = $request->content;
                $validasi->update();
            }

            return redirect('/profile-articleuser/'.Auth::user()->id)->with('success', 'Artikel berhasil di edit');
        }  else {
            return redirect('/profile-articleuser/'.Auth::user()->id)->withErrors('Artikel tidak di temukan');

        }
    }

    function listArticle() {
        $listArticle = Article::withCount('articleLike as article_like_count')
        ->with('users')
        ->get();
        return view('content.listArticle',['like' => false, 'view' => false,'listArticle' => $listArticle]);
    }

    function listArticleLike() {
        $listArticle = Article::withCount('articleLike as article_like_count')
        ->with('users')
        ->orderBy('article_like_count', 'desc')
        ->get();
        return view('content.listArticle',['like' => true, 'view' => false,'listArticle' => $listArticle]);
    }

    function listArticleView() {
        $listArticle =  Article::withCount('articleLike as article_like_count')
        ->orderBy('view', 'desc')
        ->get();
        return view('content.listArticle',['like' => false, 'view' => true,'listArticle' => $listArticle]);
    }

    function searchListArticle(Request $request) {
        $listArticle = Article::withCount('articleLike as article_like_count')
        ->with('users')
        ->where('title', 'LIKE', "%{$request->name}%")
        ->get();
        return view('content.listArticle',['like' => false, 'view' => false,'listArticle' => $listArticle]);
    }
}
