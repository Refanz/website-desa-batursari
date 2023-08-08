<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {   
        $dataPenduduk = new DataPenduduk();

        $data = $dataPenduduk->latest()->first();

        return view('pages.admin.home')->with([
            'dataPenduduk' => $data
        ]);
    }
}
