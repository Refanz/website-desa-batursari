<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        return view('pages.user.home', [
            'title' => 'home'
        ]);
    }

    public function profileDesa()
    {
        return view('pages.user.profile-desa', [
            'title' => 'profile-desa'
        ]);
    }

    public function beritaDesa()
    {
        return view('pages.user.berita-desa', [
            'title' => 'berita-desa'
        ]);
    }

    public function galeri()
    {
        return view('pages.user.galeri', [
            'title' => 'galeri'
        ]);
    }
    
    public function kontak()
    {
        return view('pages.user.kontak', [
            'title' => 'kontak'
        ]);
    }

    public function kegiatanDesa()
    {
        return view('pages.user.kegiatan-desa', [
            'title' => 'kegiatan-desa'
        ]);
    }
}
