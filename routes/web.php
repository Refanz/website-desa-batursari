<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AppController::class, 'index'])->name('home');

// Profil Desa
Route::get('/profil-desa', [AppController::class, 'profilDesa'])->name('profilDesa');
Route::get('/profil-desa/sejarah-desa', [AppController::class, 'sejarahDesa'])->name('sejarahDesa');

Route::get('/profil-desa/visi-misi', [VisiMisiController::class, 'show'])->name('visiMisiDesa');

Route::get('/profil-desa/struktur-organisasi', [AppController::class, 'strukturOrganisasi'])->name('strukturOrganisasi');
Route::get('/profil-desa/profil-kepala-desa', [AppController::class, 'profilKepalaDesa'])->name('profilKepalaDesa');
Route::get('/profil-desa/profil-perangkat-desa', [AppController::class, 'profilPerangkatDesa'])->name('profilPerangkatDesa');
Route::get('/profil-desa/peta-desa', [AppController::class, 'petaDesa'])->name('petaDesa');

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
Route::get('/dashboard/profil-desa', [DashboardController::class, 'profilDesa'])->middleware('auth')->name('profilDesaAdmin');
Route::get('/dashboard/sejarah-desa', [DashboardController::class, 'sejarahDesa'])->middleware('auth')->name('sejarahDesaAdmin');
Route::get('/dashboard/visi-misi', [VisiMisiController::class, 'showAdmin'])->middleware('auth')->name('visiMisiAdmin');
Route::get('/dashboard/struktur-organisasi', [DashboardController::class, 'strukturOrganisasi'])->middleware('auth')->name('strukturOrganisasiAdmin');
Route::get('/dashboard/profil-kepala-desa', [DashboardController::class, 'profilKepalaDesa'])->middleware('auth')->name('profilKepalaDesaAdmin');
Route::get('/dashboard/profil-perangkat-desa', [DashboardController::class, 'profilPerangkatDesa'])->middleware('auth')->name('profilPerangkatDesaAdmin');
Route::get('/dashboard/peta-desa', [DashboardController::class, 'petaDesa'])->middleware('auth')->name('petaDesaAdmin');
Route::get('/dashboard/berita-desa', [DashboardController::class, 'beritaDesa'])->middleware('auth')->name('beritaDesaAdmin');
Route::get('/dashboard/kegiatan-desa', [DashboardController::class, 'kegiatanDesa'])->middleware('auth')->name('kegiatanDesaAdmin');
Route::get('/dashboard/galeri-desa', [DashboardController::class, 'galeriDesa'])->middleware('auth')->name('galeriDesaAdmin');