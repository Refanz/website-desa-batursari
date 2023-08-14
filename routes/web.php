<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaDesaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataPendudukController;
use App\Http\Controllers\GaleriDesaController;
use App\Http\Controllers\KegiatanDesaController;
use App\Http\Controllers\PetaDesaController;
use App\Http\Controllers\ProfilDesaController;
use App\Http\Controllers\ProfilKepalaDesaController;
use App\Http\Controllers\ProfilPerangkatDesaController;
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
Route::get('/profil-desa/profil-kepala-desa', [ProfilKepalaDesaController::class, 'show'])->name('profilKepalaDesa');

// Profil Perangkat Desa
Route::get('/profil-desa/profil-perangkat-desa', [ProfilPerangkatDesaController::class, 'show'])->name('profilPerangkatDesa');

// Peta Desa
Route::get('/profil-desa/peta-desa', [PetaDesaController::class, 'show'])->name('petaDesa');

// Berita Desa
Route::get('/berita-desa', [BeritaDesaController::class, 'show'])->name('beritaDesa');
Route::get('/berita-desa/{slug}', [BeritaDesaController::class, 'showBerita'])->name('detailBerita');
Route::get('/berita/cari', [BeritaDesaController::class, 'search'])->name('cariBerita');

// Galeri Desa
Route::get('/galeri', [GaleriDesaController::class, 'show'])->name('galeri');

// Kontak
Route::get('/kontak', [AppController::class, 'kontak'])->name('kontak');

// Kegiatan Desa
Route::get('/kegiatan-desa', [KegiatanDesaController::class, 'show'])->name('kegiatanDesa');

// Login Admin
Route::get('/login', [AuthController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard Admin
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

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
Route::get('/dashboard/tampil-profil-perangkat-desa/{id}', [ProfilPerangkatDesaController::class, 'tampilDataPerangkatDesa'])->name('tampilProfilPerangkatDesaAdmin');

// Peta Desa Admin
Route::get('/dashboard/peta-desa', [PetaDesaController::class, 'index'])->middleware('auth')->name('petaDesaAdmin');
Route::post('/dashboard/peta-desa/edit-peta-desa', [PetaDesaController::class, 'update'])->middleware('auth')->name('editPetaDesaAdmin');

// Galeri Desa Admin
Route::get('/dashboard/galeri-desa', [GaleriDesaController::class, 'index'])->middleware('auth')->name('galeriDesaAdmin');
Route::get('/dashboard/tambah-galeri-desa', [GaleriDesaController::class, 'create'])->middleware('auth')->name('tambahGaleriDesaAdmin');
Route::post('/dashboard/tambah-galeri-desa', [GaleriDesaController::class, 'store'])->middleware('auth')->name('tambahGaleriDesaAdmin');
Route::get('/dashboard/edit-galeri-desa/{id}', [GaleriDesaController::class, 'edit'])->middleware('auth')->name('editGaleriDesaAdmin');
Route::post('/dashboard/edit-galeri-desa/{id}', [GaleriDesaController::class, 'update'])->middleware('auth')->name('editGaleriDesaAdmin');
Route::post('/dashboard/hapus-galeri-desa/{id}', [GaleriDesaController::class, 'destroy'])->middleware('auth')->name('hapusGaleriDesaAdmin');

// Kegiatan Desa Admin
Route::get('/dashboard/kegiatan-desa', [KegiatanDesaController::class, 'index'])->middleware('auth')->name('kegiatanDesaAdmin');
Route::get('/dashboard/tambah-kegiatan-desa', [KegiatanDesaController::class, 'create'])->middleware('auth')->name('tambahKegiatanDesaAdmin');
Route::post('/dashboard/tambah-kegiatan-desa', [KegiatanDesaController::class, 'store'])->middleware('auth')->name('tambahKegiatanDesaAdmin');
Route::get('/dashboard/edit-kegiatan-desa/{id}', [KegiatanDesaController::class, 'edit'])->middleware('auth')->name('editKegiatanDesaAdmin');
Route::post('/dashboard/edit-kegiatan-desa/{id}', [KegiatanDesaController::class, 'update'])->middleware('auth')->name('editKegiatanDesaAdmin');
Route::post('/dashboard/hapus-kegiatan-desa/{id}', [KegiatanDesaController::class, 'destroy'])->middleware('auth')->name('hapusKegiatanDesaAdmin');

// Berita Desa Admin
Route::get('/dashboard/berita-desa', [BeritaDesaController::class, 'index'])->middleware('auth')->name('beritaDesaAdmin');
Route::get('/dashboard/tambah-berita-desa', [BeritaDesaController::class, 'create'])->middleware('auth')->name('tambahBeritaDesaAdmin');
Route::post('/dashboard/tambah-berita-desa', [BeritaDesaController::class, 'store'])->middleware('auth')->name('tambahBeritaDesaAdmin');
Route::get('/dashboard/edit-berita-desa/{id}', [BeritaDesaController::class, 'edit'])->middleware('auth')->name('editBeritaDesaAdmin');
Route::post('/dashboard/edit-berita-desa/{id}', [BeritaDesaController::class, 'update'])->middleware('auth')->name('editBeritaDesaAdmin');
Route::post('/dashboard/hapus-berita-desa/{id}', [BeritaDesaController::class, 'destroy'])->middleware('auth')->name('hapusBeritaDesaAdmin');
Route::get('/dashboard/berita-desa/{slug}', [BeritaDesaController::class, 'detail'])->middleware('auth')->name('tampilBeritaDesa');

// Data Penduduk
Route::get('/dashboard/data-penduduk', [DataPendudukController::class, 'index'])->middleware('auth')->name('dataPendudukAdmin');
Route::get('dashboard/tambah-data-penduduk', [DataPendudukController::class, 'create'])->middleware('auth')->name('tambahDataPendudukAdmin');
Route::post('dashboard/tambah-data-penduduk', [DataPendudukController::class, 'store'])->middleware('auth')->name('tambahDataPendudukAdmin');
Route::get('dashboard/edit-data-penduduk/{id}', [DataPendudukController::class, 'edit'])->middleware('auth')->name('editDataPendudukAdmin');
Route::post('dashboard/edit-data-penduduk/{id}', [DataPendudukController::class, 'update'])->middleware('auth')->name('editDataPendudukAdmin');
Route::post('dashboard/hapus-data-penduduk/{id}', [DataPendudukController::class, 'destroy'])->middleware('auth')->name('hapusDataPendudukAdmin');

// Generate Sitemap
Route::get('/genSet', [AppController::class, 'generateSitemap']);