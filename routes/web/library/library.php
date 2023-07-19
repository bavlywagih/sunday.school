<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;




Route::get('/library', [LibraryController::class, 'library'])->name('library')->middleware('auth' );
Route::get('/library/topics', [LibraryController::class, 'library_topics'])->name('library_topics')->middleware('auth');
