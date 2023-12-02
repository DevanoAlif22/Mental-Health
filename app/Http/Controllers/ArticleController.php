<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleLike;
use Illuminate\Http\Request;
use App\Models\ArticleComments;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
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
    function coba(Request $request) {
        $infoArticle = [
            'id_user' => 16,
            'title' => $request->title,
            'content' => $request->content,
            'image' => 'https://i.ibb.co/PrVbFnw/Senja-2-page-0001.jpg',
            'view' => 0
        ];
        Article::create($infoArticle);
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
}
