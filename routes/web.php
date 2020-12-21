<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use Intervention\Image\Facades\Image;
use App\Http\Controllers\ArticleController;

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

//it makes all the resource routes that we need in a CRUD app.
//php artisan route:list
Route::resource('articles', ArticleController::class);

Route::get('/', function () {

    //at the first run it creates the thumbnail from the given image:
    // Image::make('images/pexels-vladislav-murashko-5990677.jpg')->resize(200, 200)->save('thumbnails/pexels-vladislav-murashko-5990677.jpg');

    //The simplest way to give back articles:
    //$articles = Article::all();

    //List the article collection by created_at in descending order, so I see the newest article on top
    //$articles = Article::orderBy('created_at', 'desc')->get();


    //If we need max 10 article on the side we use paginate();
    //In that case in the view we need this line :   {{ $articles->links() }}
    $articles = Article::orderBy('created_at', 'desc')->paginate(10);


    return view('articles.index', compact('articles'));
});
