<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Story;
use App\Mail\AuthMail;
use App\Models\Article;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\UserRequestValidation;

class AuthController extends Controller
{
    function index() {
        return view('login.login');
    }

    function login(Request $request) {
        // validasi
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ],[
            'email.required' => 'email wajib di isi',
            'email.email' => 'harus berupa email',
            'password.required' => 'password wajib di isi'
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            if(Auth::user()->email_verified_at != null) {
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
                $userProfile = Profile::where('id_user', '=', Auth::user()->id)->first();
                return view('main.index', ['imageProfile' => $userProfile->image,'popularArticle' => $popularArticles, 'popularStory' => $popularStories,'popularUser'=>$popularUser]);
            } else {
                Auth::logout();
                return redirect('/login')->withErrors('Akun anda belum di verifikasi. Harap verifikasi terlebih dahulu');
            }
        } else {
            return redirect('/login')->withErrors('username atau password salah');
        }

    }

    function create() {
        return view('login.register');

    }

    function verify($verify_key) {
        $user = User::where('verify_key', '=', $verify_key)->first();
        if($user) {
            $user->email_verified_at = date("Y-m-d H:i:s");
            $user->update();
            return redirect('/login')->with('success', 'Verifikasi berhasil. Akun anda sudah aktif');
        } else {
            return redirect('/login')->withErrors('Key tidak valid. Pastikan sudah melakukan registrasi')->withInput();

        }
    }
    function register(UserRequestValidation $request) {

        $str = Str::random(100);

        $inforegister = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'verify_key' => $str,
            'premium' => 0
        ];


        User::create($inforegister);
        $user = User::where('name', '=', $request->name)->first();
        Profile::create(['id_user' => $user->id, 'view' => 0]);
        $details = [
            'name' => $inforegister['name'],
            'website' => "Website Mental Health",
            'url' => 'http://'.request()->getHttpHost(). '/'.'verify/'.$inforegister['verify_key']
        ];

        Mail::to($inforegister['email'])->send(new AuthMail($details));

        return redirect('/login')->with('success', 'Link verifikasi sudah terkirim di email anda. Cek email untuk melakukan verifikasi');

    }

    function logout() {
        Auth::logout();
        return redirect('/home');
    }
}
