<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\AuthMail;
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
            'name' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'username wajib di isi',
            'password.required' => 'password wajib di isi'
        ]);

        $infologin = [
            'name' => $request->name,
            'password' => $request->password,
        ];

        if(Auth::attempt($infologin)) {
            if(Auth::user()->email_verified_at != null) {
                return redirect('/home')->with('success', 'Anda berhasil login');
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
            'verify_key' => $str
        ];

        User::create($inforegister);
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
