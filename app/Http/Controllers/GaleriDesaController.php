<?php

namespace App\Http\Controllers;

use App\Models\GaleriDesa;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreGaleriDesaRequest;
use App\Http\Requests\UpdateGaleriDesaRequest;

class GaleriDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = GaleriDesa::all();

        return view('pages.admin.galeri-desa')->with([
            'galeriDesa' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.galeri-desa.tambah-data-galeri-desa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGaleriDesaRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'deskripsi_gambar' => 'required',
            'img_galeri_desa' => 'image|mimes:jpeg,png,jpg,gif|max:1024'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $galeriDesa = new GaleriDesa();

        if ($request->hasFile('img_galeri_desa')) {
            $imgGaleriDesa = $request->file('img_galeri_desa');
            $imgName = time() . '.' . $imgGaleriDesa->getClientOriginalExtension();
            $imgGaleriDesa->move(public_path('galeri-desa'), $imgName);

            $galeriDesa->deskripsi_gambar = $request->input('deskripsi_gambar');
            $galeriDesa->img_galeri_desa = $imgName;

            $galeriDesa->save();

            Session::flash('success');

            return redirect()->back();
        } else {
            $galeriDesa->deskripsi_gambar = $request->input('deskripsi_gambar');
            $galeriDesa->img_galeri_desa = '';

            $galeriDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GaleriDesa $galeriDesa)
    {
        $data = $galeriDesa->all();

        return view('pages.user.galeri')->with([
            'galeriDesa' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $galeri = GaleriDesa::findOrFail($id);

        return view('pages.admin.galeri-desa.edit-data-galeri-desa')->with([
            'dataGaleri' => $galeri
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGaleriDesaRequest $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'img_galeri_desa' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi_gambar' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $galeriDesa = GaleriDesa::findOrFail($id);

        if ($request->hasFile('img_galeri_desa')) {
            $fotoGaleri = $request->file('img_galeri_desa');
            $imgName = time() . '.' . $fotoGaleri->getClientOriginalExtension();
            $fotoGaleri->move(public_path('galeri-desa'), $imgName);

            $path = public_path('galeri-desa/') . $galeriDesa->img_galeri_desa;
            File::delete($path);

            $galeriDesa->deskripsi_gambar = $request->input('deskripsi_gambar');
            $galeriDesa->img_galeri_desa = $imgName;

            $galeriDesa->save();

            Session::flash('success');

            return redirect()->back();
        } else {
            $galeriDesa->img_galeri_desa = $galeriDesa->img_galeri_desa;
            $galeriDesa->deskripsi_gambar = $request->input('deskripsi_gambar');

            $galeriDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $galeri = GaleriDesa::findOrFail($id);

        $path = public_path('galeri-desa/') . $galeri->img_perangkat_desa;
        File::delete($path);

        $galeri->delete();

        Session::flash('success');

        return redirect()->back();
    }
}
