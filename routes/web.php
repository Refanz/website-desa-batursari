<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('home');

// Profile Desa
Route::get('/profile-desa', [AppController::class, 'profilDesa'])->name('profilDesa');
Route::get('/profile-desa/sejarah-desa', [AppController::class, 'sejarahDesa'])->name('sejarahDesa');
Route::get('/profile-desa/visi-misi', [AppController::class, 'visiMisiDesa'])->name('visiMisiDesa');
Route::get('/profile-desa/struktur-organisasi', [AppController::class, 'strukturOrganisasi'])->name('strukturOrganisasi');
Route::get('/profile-desa/profile-kepala-desa', [AppController::class, 'profilKepalaDesa'])->name('profilKepalaDesa');
Route::get('/profile-desa/profile-perangkat-desa', [AppController::class, 'profilPerangkatDesa'])->name('profilPerangkatDesa');
Route::get('/profile-desa/peta-desa', [AppController::class, 'petaDesa'])->name('petaDesa');

Route::get('/berita-desa', [AppController::class, 'beritaDesa'])->name('beritaDesa');
Route::get('/galeri', [AppController::class, 'galeri'])->name('galeri');
Route::get('/kontak', [AppController::class, 'kontak'])->name('kontak');
Route::get('/kegiatan-desa', [AppController::class, 'kegiatanDesa'])->name('kegiatanDesa');

// Login Admin
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
