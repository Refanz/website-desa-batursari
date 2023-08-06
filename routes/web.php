<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PetaDesaController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\ProfilKepalaDesaController;
use App\Http\Controllers\ProfilPerangkatDesaController;
use App\Http\Controllers\SejarahDesaController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\VisiMisiController;
use App\Models\ProfilPerangkatDesa;
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
Route::get('/profil-desa/profil-kepala-desa', [ProfilKepalaDesaController::class, 'show'])->name('profilKepalaDesa');

// Profil Perangkat Desa
Route::get('/profil-desa/profil-perangkat-desa', [ProfilPerangkatDesaController::class, 'show'])->name('profilPerangkatDesa');

// Peta Desa
Route::get('/profil-desa/peta-desa', [PetaDesaController::class, 'show'])->name('petaDesa');

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

Route::get('/dashboard/berita-desa', [DashboardController::class, 'beritaDesa'])->middleware('auth')->name('beritaDesaAdmin');
Route::get('/dashboard/kegiatan-desa', [DashboardController::class, 'kegiatanDesa'])->middleware('auth')->name('kegiatanDesaAdmin');
Route::get('/dashboard/galeri-desa', [DashboardController::class, 'galeriDesa'])->middleware('auth')->name('galeriDesaAdmin');

// Visi dan Misi Admin
Route::get('/dashboard/visi-misi', [VisiMisiController::class, 'showAdmin'])->middleware('auth')->name('visiMisiAdmin');
Route::post('/dashboard/visi-misi', [VisiMisiController::class, 'update'])->middleware('auth')->name('editVisiMisi');

// Profil Desa Admin
Route::get('/dashboard/profil-desa', [ProfilDesaController::class, 'index'])->middleware('auth')->name('profilDesaAdmin');
Route::post('/dashboard/profil-desa', [ProfilDesaController::class, 'update'])->middleware('auth')->name('editDataProfilDesa');

// Sejarah Desa Admin
Route::get('/dashboard/sejarah-desa', [SejarahDesaController::class, 'index'])->middleware('auth')->name('sejarahDesaAdmin');
Route::post('/dashboard/sejarah-desa', [SejarahDesaController::class, 'update'])->middleware('auth')->name('editDataSejarahDesa');

// Struktur Organisasi Admin
Route::get('/dashboard/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->middleware('auth')->name('strukturOrganisasiAdmin');
Route::post('/dashboard/struktur-organisasi', [StrukturOrganisasiController::class, 'update'])->middleware('auth')->name('editStrukturOrganisasi');

// Profil Kepala Desa Admin
Route::get('/dashboard/profil-kepala-desa', [ProfilKepalaDesaController::class, 'index'])->middleware('auth')->name('profilKepalaDesaAdmin');
Route::post('/dashboard/profil-kepala-desa', [ProfilKepalaDesaController::class, 'update'])->middleware('auth')->name('editProfilKepalaDesa');

// Profil Perangkat Desa Admin
Route::get('/dashboard/profil-perangkat-desa', [ProfilPerangkatDesaController::class, 'index'])->middleware('auth')->name('profilPerangkatDesaAdmin');
Route::get('/dashboard/tambah-profil-perangkat-desa', [ProfilPerangkatDesaController::class, 'create'])->middleware('auth')->name('tambahProfilPerangkatDesaAdmin');
Route::post('/dashboard/tambah-profil-perangkat-desa', [ProfilPerangkatDesaController::class, 'store'])->middleware('auth')->name('tambahProfilPerangkatDesaAdmin');
Route::get('/dashboard/edit-profil-perangkat-desa/{id}', [ProfilPerangkatDesaController::class, 'edit'])->middleware('auth')->name('editProfilPerangkatDesaAdmin');
Route::post('/dashboard/edit-profil-perangkat-desa/{id}', [ProfilPerangkatDesaController::class, 'update'])->middleware('auth')->name('editProfilPerangkatDesaAdmin');
Route::post('/dashboard/hapus-profil-perangkat-desa/{id}', [ProfilPerangkatDesaController::class, 'destroy'])->middleware('auth')->name('hapusProfilPerangkatDesaAdmin');
Route::get('/dashboard/tampil-profil-perangkat-desa/{id}', [ProfilPerangkatDesaController::class, 'tampilDataPerangkatDesa'])->middleware('auth')->name('tampilProfilPerangkatDesaAdmin');

// Peta Desa Admin
Route::get('/dashboard/peta-desa', [PetaDesaController::class, 'index'])->middleware('auth')->name('petaDesaAdmin');
Route::post('/dashboard/peta-desa/edit-peta-desa', [PetaDesaController::class, 'update'])->middleware('auth')->name('editPetaDesaAdmin');