<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});

//Pricipal Route for Posts
Route::resource('posts', PostController::class);

//Route for Comments
Route::resource('posts.comments', CommentController::class)->shallow();

