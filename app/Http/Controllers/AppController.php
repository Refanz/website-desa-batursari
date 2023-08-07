<?php

namespace App\Http\Controllers;

use App\Models\GaleriDesa;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $dataGaleri = GaleriDesa::all();

        return view('pages.user.home')->with([
            'galeri' => $dataGaleri
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
}
