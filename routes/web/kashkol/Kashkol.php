<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KashkolController;


Route::get('/Kashkol', [KashkolController::class, 'kashkol'])->name('kashkol');
Route::get('/Kashkol/create', [KashkolController::class, 'Kashkol_create'])->name('Kashkol.create');
Route::get('/Kashkol/show/{id}', [KashkolController::class, 'Kashkol_show'])->name('Kashkol.show');

Route::post('/Kashkol/create/post', [KashkolController::class, 'Kashkol_create_post'])->name('Kashkol.create.post');
