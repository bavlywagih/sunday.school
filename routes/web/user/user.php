<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [ UserController::class, 'users'])->name('users');
Route::get('/delete_user/{id}', [ UserController::class, 'delete_user'])->name('delete_user');
Route::get('/create', [UserController::class, 'create'])->name('create')->middleware('admin');
Route::get('/tayo/{id}', [UserController::class, 'tayo'])->name('tayo')->middleware('admin');
Route::get( '/information/{id}', [UserController::class, 'information'])->name('information')->middleware('admin'); //تعديل
Route::post('/information/update/{id}', [UserController::class, 'information_update'])->name('information_update')->middleware('admin');
Route::post('/tayo/update/{id}', [UserController::class, 'tayo_update'])->name('tayo_update')->middleware('admin');
Route::post('/create-user', [UserController::class, 'user'])->name('user')->middleware('admin');
Route::get('/more_confirmation/{id}', [UserController::class, 'more_confirmation'])->name('more_confirmation')->middleware('admin');
Route::post('/more_confirmation_update/{id}', [UserController::class, 'more_confirmation_update'])->name('more_confirmation_update')->middleware('admin');
Route::get('/update_information/{id}', [UserController::class, 'update_information'])->name('update_information')->middleware('admin');
Route::post('/update_information/finished/{id}', [UserController::class, 'update_information_finished'])->name('update_information_finished')->middleware('admin');
