<?php

namespace App\Http\Controllers;

use App\Models\BeritaDesa;
use App\Models\DataPenduduk;
use App\Models\GaleriDesa;
use App\Models\ProfilDesa;
use App\Models\KegiatanDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class AppController extends Controller
{
    public function index()
    {
        $dataGaleri = GaleriDesa::all();
        $dataKegiatan = KegiatanDesa::all();
        $dataProfilDesa = ProfilDesa::first();
        $dataBeritaDesa = BeritaDesa::latest()->get();
        $dataPenduduk = DataPenduduk::latest()->first();

        return view('pages.user.home')->with([
            'profilDesa' => $dataProfilDesa,
            'galeri' => $dataGaleri,
            'kegiatan' => $dataKegiatan,
            'beritaDesa' => $dataBeritaDesa,
            'dataPenduduk' => $dataPenduduk
        ]);
    }

    public function profilDesa()
    {
        return view('pages.user.profil-desa.profil-desa', [
            'title' => 'profil-desa',
            'title2' => 'profil-desa'
        ]);
    }

    public function sejarahDesa()
    {
        return view('pages.user.profil-desa.sejarah-desa', [
            'title' => 'profil-desa',
            'title2' => 'sejarah-desa'
        ]);
    }

    public function visiMisiDesa()
    {
        return view('pages.user.profil-desa.visimisi-desa', [
            'title' => 'profil-desa',
            'title2' => 'visi-misi-desa'
        ]); 
    }

    public function strukturOrganisasi()
    {
        return view('pages.user.profil-desa.struktur-organisasi', [
            'title' => 'profil-desa',
            'title2' => 'struktur-organisasi'
        ]); 
    }

    public function profilKepalaDesa()
    {
        return view('pages.user.profil-desa.profil-kepala-desa', [
            'title' => 'profil-desa',
            'title2' => 'profil-kepala-desa'
        ]); 
    }

    public function profilPerangkatDesa()
    {
        return view('pages.user.profil-desa.profil-perangkat-desa', [
            'title' => 'profil-desa',
            'title2' => 'profil-kepala-desa'
        ]); 
    }

    public function petaDesa()
    {
        return view('pages.user.profil-desa.peta-desa', [
            'title' => 'profil-desa',
            'title2' => 'peta-desa'
        ]); 
    }

    public function beritaDesa()
    {
        return view('pages.user.berita-desa', [
            'title' => 'berita-desa',
            'title2' => ''
        ]);
    }
    
    public function kontak()
    {
        return view('pages.user.kontak', [
            'title' => 'kontak',
            'title2' => ''
        ]);
    }

    public function kegiatanDesa()
    {
        return view('pages.user.kegiatan-desa', [
            'title' => 'kegiatan-desa',
            'title2' => ''
        ]);
    }

    public function generateSitemap()
    {
        Artisan::call('sitemap:generate');

        return "Generate sitemap successfully";
    }
}
