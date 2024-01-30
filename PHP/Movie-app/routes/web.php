<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\YouTubeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/save-channel-info', [YouTubeController::class, 'saveChannelInfo']);


Route::prefix('/post')->group(function () {
    Route::get('/search', 'PostController@searchMovieList');
});

// routes/web.php


Route::get('/youtube-data', [YouTubeController::class, 'importYoutubeData']);

Route::get('/item', function () {
    return view('item');
});
