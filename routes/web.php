<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

// Login dan register
Route::group(['prefix' => '/login'], function () {
    Route::get('/', function () {
        return view('login.login');
    });

});

Route::get('/register', function () {
    return view('login.register');
});
//  Konten
Route::get('/article', function () {
    return view('content.article');
});
Route::get('/story', function () {
    return view('content.story');
});

// profil
Route::get('/profile', function () {
    return view('profile.profile');
});
