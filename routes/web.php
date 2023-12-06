<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;

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
Route::get('/article/{id}', [ArticleController::class, 'detail']);
Route::post('/comment-article/{id}', [ArticleController::class, 'addComment']);
Route::get('/like-article/{id}', [ArticleController::class, 'addLike']);
Route::get('/story/{id}', [StoryController::class, 'detail']);
Route::post('/comment-story/{id}', [StoryController::class, 'addComment']);
Route::get('/like-story/{id}', [StoryController::class, 'addLike']);


Route::middleware('guest')->group(function () {
    // Login dan register
    Route::get('/login', [AuthController::class, 'index'])->name('auth');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'create']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/verify/{verify_key}', [AuthController::class, 'verify']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile-aboutuser/{id}', [ProfileController::class, 'detailUser']);
    Route::get('/profile-articleuser/{id}', [ProfileController::class, 'listArticle']);
    Route::get('/profile-storyuser/{id}', [ProfileController::class, 'listStory']);

    // edit user
    Route::get('/upload-articleuser', [ArticleController::class, 'getUploadArticle']);
    Route::post('/upload-articleuser', [ArticleController::class, 'uploadArticle']);
    Route::get('/delete-article/{id}', [ArticleController::class, 'deleteArticle']);
    Route::get('/edit-article/{id}', [ArticleController::class, 'getEditArticle']);
    Route::post('/edit-article/{id}', [ArticleController::class, 'editArticle']);

    Route::get('/upload-storyuser', [StoryController::class, 'getUploadStory']);
    Route::post('/upload-storyuser', [StoryController::class, 'uploadStory']);
    Route::get('/delete-story/{id}', [StoryController::class, 'deleteStory']);
    Route::get('/edit-story/{id}', [StoryController::class, 'getEditStory']);
    Route::post('/edit-story/{id}', [StoryController::class, 'editStory']);

    Route::get('/edit-aboutuser', [ProfileController::class, 'getEditAbout']);
    Route::post('/edit-aboutuser', [ProfileController::class, 'editAbout']);
    Route::get('/edit-profileuser', [ProfileController::class, 'getEditProfil']);
    Route::post('/edit-profileuser', [ProfileController::class, 'editProfil']);
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/follow/{id}', [ProfileController::class, 'follow']);

    // laporkan
    Route::get('/report-article/{id}', [ArticleController::class, 'report']);
    Route::get('/report-story/{id}', [StoryController::class, 'report']);


    // cms
    Route::get('/article-admin',[AdminController::class,'listArticle']);
    Route::get('/report-article-reject/{id}',[AdminController::class,'reportArticleReject']);
    Route::get('/report-article-accept/{id}',[AdminController::class,'reportArticleAccept']);

    Route::get('/story-admin',[AdminController::class,'listStory']);
    Route::get('/report-story-reject/{id}',[AdminController::class,'reportStoryReject']);
    Route::get('/report-story-accept/{id}',[AdminController::class,'reportStoryAccept']);
});

// list konten
Route::get('/list-profile', [ProfileController::class, 'listUser']);
Route::get('/list-profile-follower', [ProfileController::class, 'listUserFollow']);
Route::get('/list-profile-view', [ProfileController::class, 'listUserView']);
Route::post('/list-profile', [ProfileController::class, 'searchListUser']);

Route::get('/list-article', [ArticleController::class, 'listArticle']);
Route::get('/list-article-like', [ArticleController::class, 'listArticleLike']);
Route::get('/list-article-view', [ArticleController::class, 'listArticleView']);
Route::post('/list-article', [ArticleController::class, 'searchListArticle']);

Route::get('/list-story', [StoryController::class, 'listStory']);
Route::get('/list-story-like', [StoryController::class, 'listStoryLike']);
Route::get('/list-story-view', [StoryController::class, 'listStoryView']);
Route::post('/list-story', [StoryController::class, 'searchListStory']);

Route::get('/all-search', [MainController::class, 'allSearch']);
Route::post('/all-search', [MainController::class, 'searchAllSearch']);

Route::get('/sistem-pakar', [MainController::class,'sistemPakar']);
Route::post('/sistem-pakar', [MainController::class,'sistemPakarHasil']);

// cms
Route::get('/cms-admin', function () {
    return view('cms.cms');
});
Route::get('/cms-story', function () {
    return view('cms.cms_story');
});
// tanya ai
Route::get('/tanya-ai', function () {
    return view('tanyaAi.tanya_ai');
});
