<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::post('/create', [PostController::class, 'createPost'])->name('posts.create')->middleware('auth')->middleware('admin');
Route::get('/load', [PostController::class, 'posts'])->name('load.post')->middleware('auth');
Route::get('/posts/delete/{id}', [PostController::class, 'delete'])->name('post.delete')->middleware('auth')->middleware('admin');
Route::get('/post/{id}',   [PostController::class, 'postshare'])->name('postshare')->middleware('auth');
Route::get('/posts/edit/{id}',   [PostController::class, 'edit'])->name('post.edit')->middleware('auth')->middleware('admin');
Route::post('/posts/update/{id}',  [PostController::class, 'update'])->name('post.update')->middleware('auth')->middleware('admin');
Route::post('/posts/image/upload', [PostController::class, 'uploadPostImage'])->name('posts.image.upload')->middleware('auth')->middleware('admin');
