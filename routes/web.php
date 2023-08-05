<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\SejarahDesaController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VisiMisiController;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', [AppController::class, 'index'])->name('home');

// Profil Desa
Route::get('/profil-desa', [ProfilDesaController::class, 'show'])->name('profilDesa');

// Sejarah Desa
Route::get('/profil-desa/sejarah-desa', [SejarahDesaController::class, 'show'])->name('sejarahDesa');

// Visi Misi
Route::get('/profil-desa/visi-misi', [VisiMisiController::class, 'show'])->name('visiMisiDesa');

// Struktur Organisasi
Route::get('/profil-desa/struktur-organisasi', [StrukturOrganisasiController::class, 'show'])->name('strukturOrganisasi');

// Profil Kepala Desa
Route::get('/profil-desa/profil-kepala-desa', [AppController::class, 'profilKepalaDesa'])->name('profilKepalaDesa');

// Profil Perangkat Desa
Route::get('/profil-desa/profil-perangkat-desa', [AppController::class, 'profilPerangkatDesa'])->name('profilPerangkatDesa');

// Peta Desa
Route::get('/profil-desa/peta-desa', [AppController::class, 'petaDesa'])->name('petaDesa');

// Berita Desa
Route::get('/berita-desa', [AppController::class, 'beritaDesa'])->name('beritaDesa');

// Galeri Desa
Route::get('/galeri', [AppController::class, 'galeri'])->name('galeri');

// Kontak
Route::get('/kontak', [AppController::class, 'kontak'])->name('kontak');

// Kegiatan Desa
Route::get('/kegiatan-desa', [AppController::class, 'kegiatanDesa'])->name('kegiatanDesa');

// Login Admin
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');


Route::get('/dashboard/profil-kepala-desa', [DashboardController::class, 'profilKepalaDesa'])->middleware('auth')->name('profilKepalaDesaAdmin');
Route::get('/dashboard/profil-perangkat-desa', [DashboardController::class, 'profilPerangkatDesa'])->middleware('auth')->name('profilPerangkatDesaAdmin');
Route::get('/dashboard/peta-desa', [DashboardController::class, 'petaDesa'])->middleware('auth')->name('petaDesaAdmin');
Route::get('/dashboard/berita-desa', [DashboardController::class, 'beritaDesa'])->middleware('auth')->name('beritaDesaAdmin');
Route::get('/dashboard/kegiatan-desa', [DashboardController::class, 'kegiatanDesa'])->middleware('auth')->name('kegiatanDesaAdmin');
Route::get('/dashboard/galeri-desa', [DashboardController::class, 'galeriDesa'])->middleware('auth')->name('galeriDesaAdmin');

// Visi dan Misi
Route::get('/dashboard/visi-misi', [VisiMisiController::class, 'showAdmin'])->middleware('auth')->name('visiMisiAdmin');
Route::post('/dashboard/visi-misi', [VisiMisiController::class, 'update'])->middleware('auth')->name('editVisiMisi');

// Profil Desa Admin
Route::get('/dashboard/profil-desa', [ProfilDesaController::class, 'index'])->middleware('auth')->name('profilDesaAdmin');
Route::post('/dashboard/profil-desa', [ProfilDesaController::class, 'update'])->middleware('auth')->name('editDataProfilDesa');

// Sejarah Desa Admin
Route::get('/dashboard/sejarah-desa', [SejarahDesaController::class, 'index'])->middleware('auth')->name('sejarahDesaAdmin');
Route::post('/dashboard/sejarah-desa', [SejarahDesaController::class, 'update'])->middleware('auth')->name('editDataSejarahDesa');

// Struktur Organisasi
Route::get('/dashboard/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->middleware('auth')->name('strukturOrganisasiAdmin');
Route::post('/dashboard/struktur-organisasi', [StrukturOrganisasiController::class, 'update'])->middleware('auth')->name('editStrukturOrganisasi');