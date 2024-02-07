<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Article;
use App\Models\StoryLike;
use App\Models\ArticleLike;
use App\Models\StoryComment;
use Illuminate\Http\Request;
use App\Models\ArticleComments;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function listArticle() {
        if(Auth::user()->name == 'admin' && Auth::user()->email == 'admin@gmail.com') {
            $article = Article::withCount('articleLike as article_like_count')->with('users')->where('report', true)->get();
            return view('cms.cms',['article' => $article]);
        } else {
            return redirect('/home');
        }
    }

    function reportArticleReject($id) {
        if(Auth::user()->name == 'admin' && Auth::user()->email == 'admin@gmail.com') {

            $validasi = Article::where('id',$id)->where('report', true)->first();
            if($validasi) {
                $validasi->report = false;
                $validasi->update();
                return redirect('/article-admin')->with('success', 'Laporan Artikel Berhasil Di Tolak');
            } else {

                return redirect('/article-admin')->withErrors('Laporan Artikel Tidak Di Temukan');
            }
        } else {
            return redirect('/article-admin')->withErrors('Laporan Artikel Tidak Di Temukan');
        }
    }

    function reportArticleAccept($id) {
        if(Auth::user()->name == 'admin' && Auth::user()->email == 'admin@gmail.com') {

            $validasi = Article::where('id',$id)->where('report', true)->first();
            if($validasi) {
                ArticleLike::where('id_article',$validasi->id)->delete();
                ArticleComments::where('id_article',$validasi->id)->delete();
                $validasi->delete();
                return redirect('/article-admin')->with('success', 'Laporan Artikel Berhasil Di Hapus Dari Database');
            } else {

                return redirect('/article-admin')->withErrors('Laporan Artikel Tidak Di Temukan');
            }
        } else {
            return redirect('/article-admin')->withErrors('Laporan Artikel Tidak Di Temukan');
        }
    }

    function listStory() {
        if(Auth::user()->name == 'admin' && Auth::user()->email == 'admin@gmail.com') {
            $story = Story::withCount('storyLike as story_like_count')->with('users')->where('report', true)->get();
            return view('cms.cmsStory',['story' => $story]);
        } else {
            return view('main.index');
        }
    }

    function reportStoryReject($id) {
        if(Auth::user()->name == 'admin' && Auth::user()->email == 'admin@gmail.com') {

            $validasi = Story::where('id',$id)->where('report', true)->first();
            if($validasi) {
                $validasi->report = false;
                $validasi->update();
                return redirect('/story-admin')->with('success', 'Laporan Cerita Berhasil Di Tolak');
            } else {

                return redirect('/story-admin')->withErrors('Laporan Cerita Tidak Di Temukan');
            }
        } else {
            return redirect('/story-admin')->withErrors('Laporan Cerita Tidak Di Temukan');
        }
    }

    function reportStoryAccept($id) {
        if(Auth::user()->name == 'admin' && Auth::user()->email == 'admin@gmail.com') {
            $validasi = Story::where('id',$id)->where('report', true)->first();
            if($validasi) {
                StoryLike::where('id_story',$validasi->id)->delete();
                StoryComment::where('id_story',$validasi->id)->delete();
                $validasi->delete();
                return redirect('/story-admin')->with('success', 'Laporan Cerita Berhasil Di Hapus Dari Database');
            } else {
                return redirect('/story-admin')->withErrors('Laporan Cerita Tidak Di Temukan');
            }
        } else {
            return redirect('/story-admin')->withErrors('Laporan Cerita Tidak Di Temukan');
        }
    }
}
