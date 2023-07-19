<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;


Route::get('/profile',  [ProfileController::class, 'profile'])->name('profile')->middleware('auth') ;
Route::get('/profile-edit',  [ProfileController::class, 'edit_profile'])->name('edit.profile')->middleware('auth')->middleware('admin');
Route::post('/profile-update/{id}',  [ProfileController::class, 'update_profile'])->name('update.profile')->middleware('auth')->middleware('admin');

Route::get('/profile/{id}',  [ProfileController::class, 'profile_id'])->name('profileid')->middleware('auth');

