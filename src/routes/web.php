<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [\App\Http\Controllers\PostsController::class, 'index']);
Route::get('/posts/{post}', [App\Http\Controllers\PostsController::class, 'show']);
Route::get('/posts/{post}/comments', [App\Http\Controllers\CommentsController::class, 'index']);
Route::get('/posts/{post}/comments/{comment}', [App\Http\Controllers\CommentsController::class, 'show']);
