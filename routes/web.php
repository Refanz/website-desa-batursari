<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('home');
Route::get('/profile-desa', [AppController::class, 'profileDesa'])->name('profileDesa');
Route::get('/berita-desa', [AppController::class, 'beritaDesa'])->name('beritaDesa');
Route::get('/galeri', [AppController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [AppController::class, 'kontak'])->name('kontak');

