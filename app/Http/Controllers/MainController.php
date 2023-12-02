<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Article;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    function index() {
        $popularArticles = Article::with('users')  // Jangan lupa ganti 'users' dengan nama relasi yang sesuai pada model Article
        ->orderBy('view', 'desc')
        ->take(6) // Ambil 6 artikel teratas
        ->get();
        $popularStories = Story::with('users')  // Jangan lupa ganti 'users' dengan nama relasi yang sesuai pada model Article
        ->orderBy('view', 'desc')
        ->take(3) // Ambil 3 cerita teratas
        ->get();
        if(Auth::user()) {
            $userProfile = Profile::where('id_user', '=', Auth::user()->id)->first();
            return view('main.index', ['imageProfile' => $userProfile->image, 'popularArticle' => $popularArticles, 'popularStory' => $popularStories]);
        } else {
            return view('main.index', ['popularArticle' => $popularArticles, 'popularStory' => $popularStories]);

        }
    }
}
