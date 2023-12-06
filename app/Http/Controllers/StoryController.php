<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Story;
use App\Models\Category;
use App\Models\Follower;
use App\Models\StoryLike;
use App\Models\StoryComment;
use Illuminate\Http\Request;
use App\Models\StoryCategory;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoryRequestValidation;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class StoryController extends Controller
{
    function getData() {
        $profil = User::with(['profiles','followers'])->where('id',Auth::user()->id)->first();
        $totalFollower = Follower::where('id_follow',Auth::user()->id)->count();
        return [$profil,$totalFollower];
    }

    function getUploadStory() {
        $data = $this->getData();
        $category = StoryCategory::get();
        return view('profile.upload-storyuser', ['follow' => false, 'profilUser' => true, 'category' => $category,'story' => null,'profil' => $data[0], 'totalFollower' => $data[1]]);
    }

    function uploadStory(StoryRequestValidation $request) {

        $imageName = Auth::user()->id . '_' . now()->format('YmdHis');
        $imagePathFull = 'user/' . Auth::user()->id . '/images/story/'.$imageName;
        $uploadedFileImage = Cloudinary::upload($request->file('image')->getRealPath(), [
            'folder' => 'user/' . Auth::user()->id . '/images/story',
            'public_id' => $imageName,
        ]);
        $fileImage = $uploadedFileImage->getSecurePath();

        // Menghasilkan nama unik untuk file audio dengan menggunakan nama yang sudah diedit
        $audioName = Auth::user()->id . '_' . now()->format('YmdHis');
        $audioPathFull = 'user/' . Auth::user()->id . '/audio/story/'.$audioName;
        $uploadedFileAudio = Cloudinary::upload($request->file('audio')->getRealPath(), [
            'folder' => 'user/' . Auth::user()->id . '/audio/story',
            'public_id' => $audioName,
            'resource_type' => 'auto'
        ]);

        // Membuat artikel baru
        $story = Story::create([
            'id_user' => Auth::user()->id,
            'audio' =>  $uploadedFileAudio->getSecurePath(),
            'image' =>  $fileImage,
            'title' => $request->title,
            'description' => $request->description,
            'view' => 0,
            'image_path' => $imagePathFull,
            'audio_path' => $audioPathFull
        ]);

        if($request->Motivasi) {
            Category::create([
                'id_story_category' => 1,
                'id_story' => $story->id
            ]);
        }
        if($request->Pengalaman) {
            Category::create([
                'id_story_category' => 2,
                'id_story' => $story->id
            ]);
        }
        if($request->Bahagia) {
            Category::create([
                'id_story_category' => 3,
                'id_story' => $story->id
            ]);
        }
        if($request->Sedih) {
            Category::create([
                'id_story_category' => 4,
                'id_story' => $story->id
            ]);
        }

        return redirect('/profile-storyuser/'.Auth::user()->id)->with('success', 'Cerita berhasil diposting');
    }

    function deleteStory($id) {
        if(Auth::user()) {
            $validasi = Story::where('id',$id)->where('id_user', Auth::user()->id)->first();

            if($validasi) {
                Cloudinary::destroy($validasi->image_path);
                Cloudinary::destroy($validasi->audio_path, ['resource_type' => 'video']);
                Category::where('id_story',$id)->delete();
                $validasi->delete();
                return redirect('/profile-storyuser/'.Auth::user()->id)->with('success', 'Cerita berhasil dihapus');
            } else {
                return redirect('/profile-storyuser/'.Auth::user()->id)->withErrors('Cerita tidak di temukan');
            }
        } else {
            return redirect('/profile-storyuser/'.Auth::user()->id)->withErrors('Cerita tidak di temukan');
        }
    }

    function getEditStory($id) {
        $validasi = Story::where('id_user',Auth::user()->id)->where('id', $id)->first();
        $category = StoryCategory::get();
        if($validasi) {
            $data = $this->getData();
            return view('profile.upload-storyuser', ['follow' => false, 'profilUser' => true, 'category' => $category,'story' => $validasi, 'profil' => $data[0], 'totalFollower' => $data[1]]);
        } else {
            return redirect('/profile-articleuser/'.Auth::user()->id)->withErrors('Artikel tidak di temukan');

        }
    }

    function detail($id) {
        $story = Story::with(['users','storyComment','storyLike'])->find($id);

        if($story) {
            if(Auth::user()) {
                $like = $story->storyLike->where('id_user',Auth::user()->id)->where('id_story',$id)->first();
            } else {
                $like = null;
            }
            if($story) {
                $story->view = $story->view + 1;
                $totalComment = $story->storyComment->count();
                $totalLike = $story->storyLike->count();
                $story->update();
                return view('content.story',['story' => $story,'totalComment' => $totalComment, 'like' => $like, 'totalLike' => $totalLike]);
            } else {
                return redirect('/home');
            }
        } else {
            return redirect('/home');

        }
    }

    function addComment(Request $request, $id) {
        if(Auth::user()) {
            $infoComment = [
                'id_user' => Auth::user()->id,
                'id_story' => $id,
                'content' => $request->content
            ];
            StoryComment::create($infoComment);
            return redirect('/story/'.$id);

        } else {
            return redirect('/story/'.$id);

        }
    }

    function addLike($id) {
        if(Auth::user()){
            $validasi = StoryLike::where('id_user',Auth::user()->id)->where('id_story', $id)->first();
            if($validasi == null){
                $infoLike = [
                    'id_user' => Auth::user()->id,
                    'id_story' => $id,
                ];
                StoryLike::create($infoLike);
                return redirect('/story/'.$id);
            } else {
                $validasi->delete();
                return redirect('/story/'.$id);
            }
        } else {
            return redirect('/story/'.$id);
        }
    }

    function editStory(Request $request, $id) {
        $request->validate( [
            'audio' => 'mimes:mp3,mpeg|max:5048',
            'image' => 'image|mimes:jpeg,png,jpg|max:5048',
            'title' => 'required|string|max:35',
            'description' => 'required|string',
        ], [
            'audio.mimes' => 'Format audio tidak valid. Gunakan format mp3 atau mpeg.',
            'audio.max' => 'Ukuran gambar tidak boleh melebihi 5MB.',
            'image.image' => 'File harus berupa gambar.',
            'image.mimes' => 'Format gambar tidak valid. Gunakan format jpeg, png, atau jpg.',
            'image.max' => 'Ukuran gambar tidak boleh melebihi 5MB.',
            'title.required' => 'Judul artikel harus diisi.',
            'title.string' => 'Judul harus berupa teks.',
            'title.max' => 'Judul tidak boleh melebihi :max karakter.',
            'description.required' => 'Isi artikel harus diisi.',
            'description.string' => 'Isi artikel harus berupa teks.',
        ]);

        $validasi = Story::where('id_user',Auth::user()->id)->where('id', $id)->first();
        if($validasi) {
            if($request->image != null) {
                Cloudinary::destroy($validasi->image_path);
                // Menghasilkan nama unik untuk file dengan menggunakan nama yang sudah diedit
                $imageName = Auth::user()->id . '_' . now()->format('YmdHis') . '.' . $request->file('image')->getClientOriginalExtension();
                $imagePathFull = 'user/' . Auth::user()->id . '/images/story/'.$imageName;
                // Mengunggah gambar ke Cloudinary dengan menyertakan folder dan public_id
                $uploadedFile = Cloudinary::upload($request->file('image')->getRealPath(), [
                    'folder' => 'user/' . Auth::user()->id . '/images/story',
                    'public_id' => $imageName,
                ]);
                $fileImage = $uploadedFile->getSecurePath();

                $validasi->image  =  $fileImage;
                $validasi->image_path = $imagePathFull;

            }

            if($request->audio != null) {
                Cloudinary::destroy($validasi->audio_path, ['resource_type' => 'video']);
                // Menghasilkan nama unik untuk file audio dengan menggunakan nama yang sudah diedit
                $audioName = Auth::user()->id . '_' . now()->format('YmdHis');
                $audioPathFull = 'user/' . Auth::user()->id . '/audio/story/'.$audioName;
                $uploadedFileAudio = Cloudinary::upload($request->file('audio')->getRealPath(), [
                    'folder' => 'user/' . Auth::user()->id . '/audio/story',
                    'public_id' => $audioName,
                    'resource_type' => 'auto'
                ]);

                $validasi->audio  =  $uploadedFileAudio->getSecurePath();
                $validasi->audio_path = $audioPathFull;
            }

            $validasi->title  = $request->title;
            $validasi->description = $request->description;
            $validasi->update();
            return redirect('/profile-storyuser/'.Auth::user()->id)->with('success', 'Artikel berhasil di edit');
        }  else {
            return redirect('/profile-storyuser/'.Auth::user()->id)->withErrors('Artikel tidak di temukan');

        }
    }

    function listStory() {
        $listStory = Story::withCount('storyLike as story_like_count')
        ->with('users')
        ->get();
        return view('content.listStory',['like' => false, 'view' => false,'listStory' => $listStory]);
    }

    function listStoryLike() {
        $listStory = Story::withCount('storyLike as story_like_count')
        ->with('users')
        ->orderBy('story_like_count', 'desc')
        ->get();
        return view('content.listStory',['like' => true, 'view' => false,'listStory' => $listStory]);
    }

    function listStoryView() {
        $listStory =  Story::withCount('storyLike as story_like_count')
        ->orderBy('view', 'desc')
        ->get();
        return view('content.listStory',['like' => false, 'view' => true,'listStory' => $listStory]);
    }

    function searchListStory(Request $request) {
        $listStory = Story::withCount('storyLike as story_like_count')
        ->with('users')
        ->where('title', 'LIKE', "%{$request->name}%")
        ->get();
        return view('content.listStory',['like' => false, 'view' => false,'listStory' => $listStory]);
    }

    function report($id) {
        $validasi = Story::where('id',$id)->first();
        if($validasi) {
            if($validasi->report == false) {
                $validasi->report = true;
                $validasi->update();
                return redirect('/story/'.$id);
            } else {
                return redirect('/home');
            }
        } else {
            return redirect('/home');
        }
    }
}
