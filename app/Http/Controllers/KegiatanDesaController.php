<?php

namespace App\Http\Controllers;

use App\Models\KegiatanDesa;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreKegiatanDesaRequest;
use App\Http\Requests\UpdateKegiatanDesaRequest;
use Illuminate\Support\Facades\File;

class KegiatanDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = KegiatanDesa::all();

        return view('pages.admin.kegiatan-desa')->with([
            'kegiatanDesa' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.kegiatan-desa.tambah-data-kegiatan-desa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKegiatanDesaRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_kegiatan' => 'required',
            'deskripsi_kegiatan' => 'required',
            'img_kegiatan_desa' => 'image|mimes:jpeg,png,jpg,gif|max:1024'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $kegiatanDesa = new KegiatanDesa();

        if ($request->hasFile('img_kegiatan')) {
            $imgKegiatanDesa = $request->file('img_kegiatan');
            $imgName = time() . '.' . $imgKegiatanDesa->getClientOriginalExtension();
            $imgKegiatanDesa->move(public_path('kegiatan-desa'), $imgName);

            $kegiatanDesa->nama_kegiatan = $request->input('nama_kegiatan');
            $kegiatanDesa->deskripsi_kegiatan = $request->input('deskripsi_kegiatan');
            $kegiatanDesa->img_kegiatan = $imgName;

            $kegiatanDesa->save();

            Session::flash('success');

            return redirect()->back();
        } else {
            $kegiatanDesa->nama_kegiatan = $request->input('nama_kegiatan');
            $kegiatanDesa->deskripsi_kegiatan = $request->input('deskripsi_kegiatan');
            $kegiatanDesa->img_kegiatan = '';

            $kegiatanDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(KegiatanDesa $kegiatanDesa)
    {
        $data = KegiatanDesa::all();

        return view('pages.user.kegiatan-desa')->with([
            'kegiatanDesa' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = KegiatanDesa::findOrFail($id);

        return view('pages.admin.kegiatan-desa.edit-data-kegiatan-desa')->with([
            'kegiatanDesa' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKegiatanDesaRequest $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_kegiatan' => 'required',
            'img_kegiatan' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'deskripsi_kegiatan' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $kegiatanDesa = KegiatanDesa::findOrFail($id);

        if ($request->hasFile('img_kegiatan')) {
            $fotoKegiatan = $request->file('img_kegiatan');
            $imgName = time() . '.' . $fotoKegiatan->getClientOriginalExtension();
            $fotoKegiatan->move(public_path('kegiatan-desa'), $imgName);

            $path = public_path('kegiatan-desa/') . $kegiatanDesa->img_kegiatan;
            File::delete($path);

            $kegiatanDesa->nama_kegiatan = $request->input('nama_kegiatan');
            $kegiatanDesa->deskripsi_kegiatan = $request->input('deskripsi_kegiatan');
            $kegiatanDesa->img_kegiatan = $imgName;

            $kegiatanDesa->save();

            Session::flash('success');

            return redirect()->back();
        } else {
            $kegiatanDesa->nama_kegiatan = $request->input('nama_kegiatan');
            $kegiatanDesa->img_kegiatan = $kegiatanDesa->img_kegiatan;
            $kegiatanDesa->deskripsi_kegiatan = $request->input('deskripsi_kegiatan');

            $kegiatanDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = KegiatanDesa::findOrFail($id);

        $data->delete();

        $path = public_path('kegiatan-desa/') . $data->img_kegiatan;
        File::delete($path);

        Session::flash('success');

        return redirect()->back();
    }
}
