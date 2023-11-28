<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [MainController::class, 'index'])->name('home');
//  Konten
Route::get('/article', function () {
    return view('content.article');
});
Route::get('/story', function () {
    return view('content.story');
});

Route::middleware('guest')->group(function () {
    // Login dan register
    Route::get('/login', [AuthController::class, 'index'])->name('auth');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'create']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);

});
Route::middleware('auth')->group(function () {
    Route::get('/profile-about', function () {
        return view('profile.profile-about');
    });
    Route::get('/profile-article', function () {
        return view('profile.profile-article');
    });
    Route::get('/logout', [AuthController::class, 'logout']);
});
