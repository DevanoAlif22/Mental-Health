<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\StoryLike;
use App\Models\StoryComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StoryController extends Controller
{
    function coba() {
        return view('coba2');
    }
    function coba2(Request $request) {
        $infoStory = [
            'id_user' => 15,
            'audio' => 'audio.mp3',
            'title' => $request->title,
            'description' => $request->description,
            'image' => 'https://i.ibb.co/PrVbFnw/Senja-2-page-0001.jpg',
            'view' => 0
        ];
        Story::create($infoStory);
    }
    function detail($id) {
        $story = Story::with(['users','storyComment','storyLike'])->find($id);
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
            return view('main.index');
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
}
