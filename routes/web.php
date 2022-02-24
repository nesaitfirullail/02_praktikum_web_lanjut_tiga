<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\KontakController;

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

Route::get('/home', [HomeController::class, 'index']);
Route::prefix('/category')->group(function(){
    Route::get('/marbel-edu-games', [ProductController::class, 'cat1']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'cat2']);
    Route::get('/riri-story-books', [ProductController::class, 'cat1']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'cat1']);
});
Route::get('/news', [ArticleController::class, 'article1']);
Route::get('/news/{news}', [ArticleController::class, 'article2']);

Route::prefix('/program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjungan']);
});

Route::get('/about-us', [AboutController::class, 'about']);
Route::get('/contact-us', [KontakController::class, 'kontak']);