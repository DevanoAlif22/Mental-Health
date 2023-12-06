<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Story;
use App\Models\Article;
use App\Models\Disease;
use App\Models\Profile;
use App\Models\Symptom;
use App\Models\Indication;
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
        $popularUser = User::withCount('followers as follower_count')
        ->with('profiles')
        ->orderBy('follower_count', 'desc')
        ->take(8)
        ->get();

        if(Auth::user()) {
            $userProfile = Profile::where('id_user', '=', Auth::user()->id)->first();
            return view('main.index', ['imageProfile' => $userProfile->image, 'popularArticle' => $popularArticles, 'popularStory' => $popularStories,'popularUser'=>$popularUser]);
        } else {
            return view('main.index', ['popularArticle' => $popularArticles, 'popularStory' => $popularStories,'popularUser'=>$popularUser]);

        }
    }

    function allSearch(){
        $profil = [];
        $article = [];
        $story = [];
        return view('allsearch.allsearch',['data' => [$profil,$article,$story]]);
    }

    function searchAllSearch(Request $request) {
        $profil = User::withCount('followers as follower_count')
        ->with('profiles')
        ->where('name', 'LIKE', "%{$request->search}%")
        ->get();
        $article = Article::withCount('articleLike as article_like_count')
        ->with('users')
        ->where('title', 'LIKE', "%{$request->search}%")
        ->get();
        $story = Story::withCount('storyLike as story_like_count')
        ->with('users')
        ->where('title', 'LIKE', "%{$request->search}%")
        ->get();


        return view('allsearch.allsearch',['data' => [$profil,$article,$story]]);
    }

    function sistemPakar() {
        $indikasi = Symptom::get();
        // dd($indikasi);
        return view('sistempakar.sistemPakar',['indikasi' => $indikasi]);
    }

    function sistemPakarHasil(Request $request) {
        $input = $request->indikasi;
        $hasil = $this->cekSistemPakar($input);

        if($hasil != 'no') {
            $diagnosa = Disease::where('code',$hasil)->first();
            $gejala = Symptom::whereIn('code',$input)->get();
            return view("sistempakar.sistemPakarHasil",['hasil' => true, 'diagnosa' => $diagnosa, 'gejala' => $gejala]);
        }
        return view("sistempakar.sistemPakarHasil",['hasil' => false, 'diagnosa' => 'Masukkan data yang sesuai dengan gejala anda', 'gejala' => null]);

    }

    function cekSistemPakar($input) {
        $rules = $this->checkRule1($input);
        if($rules == true) {
            return 'P10';
        }
        $rules = $this->checkRule2($input);
        if($rules == true) {
            return 'P09';
        }
        $rules = $this->checkRule3($input);
        if($rules == true) {
            return 'P08';
        }
        $rules = $this->checkRule4($input);
        if($rules == true) {
            return 'P07';
        }
        $rules = $this->checkRule5($input);
        if($rules == true) {
            return 'P06';
        }
        $rules = $this->checkRule6($input);
        if($rules == true) {
            return 'P05';
        }
        $rules = $this->checkRule7($input);
        if($rules == true) {
            return 'P04';
        }
        $rules = $this->checkRule8($input);
        if($rules == true) {
            return 'P03';
        }
        $rules = $this->checkRule9($input);
        if($rules == true) {
            return 'P02';
        }
        $rules = $this->checkRule10($input);
        if($rules == true) {
            return 'P01';
        }

        return 'no';

    }

    public static function checkRule1($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('A1', $inputArray) &&
               in_array('AS1', $inputArray) &&
               (in_array('B1', $inputArray) ||
               in_array('B1.1', $inputArray) ||
               in_array('B1.2', $inputArray) ||
               in_array('B1.3', $inputArray) ||
               in_array('B1.4', $inputArray));
    }

    public static function checkRule2($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('A1', $inputArray) &&
               in_array('AS1', $inputArray) &&
               (in_array('B2', $inputArray) ||
               in_array('B2.1', $inputArray) ||
               in_array('B2.2', $inputArray) ||
               in_array('B2.3', $inputArray));
    }

    public static function checkRule3($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('AS1', $inputArray) &&
               (in_array('S1', $inputArray) ||
               in_array('S1.1', $inputArray) ||
               in_array('S1.2', $inputArray) ||
               in_array('S1.3', $inputArray) ||
               in_array('S1.4', $inputArray));
    }

    public static function checkRule4($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('AS1', $inputArray) &&
               (in_array('S2', $inputArray) ||
               in_array('S2.1', $inputArray) ||
               in_array('S2.2', $inputArray) ||
               in_array('S2.3', $inputArray));
    }

    public static function checkRule5($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('AS1', $inputArray) &&
               (in_array('S3', $inputArray) ||
               in_array('S3.1', $inputArray) ||
               in_array('S3.2', $inputArray) ||
               in_array('S3.3', $inputArray));
    }

    public static function checkRule6($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('AS1', $inputArray) &&
               (in_array('S4', $inputArray) ||
               in_array('S4.1', $inputArray) ||
               in_array('S4.2', $inputArray) ||
               in_array('S4.3', $inputArray));
    }

    public static function checkRule7($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('AS1', $inputArray) &&
               (in_array('S5', $inputArray) ||
               in_array('S5.1', $inputArray) ||
               in_array('S5.2', $inputArray));
    }

    public static function checkRule8($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('AS2', $inputArray) &&
               (in_array('R1', $inputArray) ||
               in_array('R1.1', $inputArray) ||
               in_array('R1.2', $inputArray) ||
               in_array('R1.3', $inputArray) ||
               in_array('R1.4', $inputArray));
    }

    public static function checkRule9($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('AS2', $inputArray) &&
               (in_array('R2', $inputArray) ||
               in_array('R2.1', $inputArray) ||
               in_array('R2.2', $inputArray) ||
               in_array('R2.3', $inputArray) ||
               in_array('R2.4', $inputArray));
    }

    public static function checkRule10($inputArray)
    {
        return in_array('A', $inputArray) &&
               in_array('AS2', $inputArray) &&
               (in_array('R3', $inputArray) ||
               in_array('R3.1', $inputArray) ||
               in_array('R3.2', $inputArray) ||
               in_array('R3.3', $inputArray));
    }
}
