<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.home')->with([
            
        ]);
    }

    public function profilDesa()
    {
        return view('pages.admin.profil-desa')->with([
       
        ]);
    }

    public function sejarahDesa()
    {
        return view('pages.admin.sejarah-desa')->with([
       
        ]);
    }

    public function visiMisi()
    {
        return view('pages.admin.visi-misi')->with([

        ]);
    }

    public function strukturOrganisasi()
    {
        return view('pages.admin.struktur-organisasi')->with([
     
        ]);
    }

    public function profilKepalaDesa()
    {
        return view('pages.admin.profil-kepala-desa')->with([
           
        ]);
    }

    public function profilPerangkatDesa()
    {
        return view('pages.admin.profil-perangkat-desa')->with([
        
        ]);
    }

    public function petaDesa()
    {
        return view('pages.admin.peta-desa')->with([
           
        ]);
    }

    public function beritaDesa()
    {
        return view('pages.admin.berita-desa')->with([
           
        ]);
    }

    public function kegiatanDesa()
    {
        return view('pages.admin.kegiatan-desa')->with([
         
        ]); 
    }

    public function galeriDesa()
    {
        return view('pages.admin.galeri-desa')->with([
          
        ]);
    }
}
