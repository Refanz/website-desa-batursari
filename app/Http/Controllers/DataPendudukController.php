<?php

namespace App\Http\Controllers;

use App\Models\DataPenduduk;
use App\Http\Requests\StoreDataPendudukRequest;
use App\Http\Requests\UpdateDataPendudukRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DataPendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataPenduduk::all();

        return view('pages.admin.data-penduduk')->with([
            'dataPenduduk' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.data-penduduk.tambah-data-penduduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataPendudukRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'tahun' => 'required',
            'jumlah_penduduk' => 'required',
            'jumlah_perempuan' => 'required',
            'jumlah_laki_laki' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $dataPenduduk = new DataPenduduk();
        $dataPenduduk->tahun = $request->tahun;
        $dataPenduduk->jumlah_penduduk = $request->jumlah_penduduk;
        $dataPenduduk->jumlah_perempuan = $request->jumlah_perempuan;
        $dataPenduduk->jumlah_laki_laki = $request->jumlah_laki_laki;

        $dataPenduduk->save();

        Session::flash('success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPenduduk $dataPenduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = DataPenduduk::findOrFail($id);

        return view('pages.admin.data-penduduk.edit-data-penduduk')->with([
            'dataPenduduk' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataPendudukRequest $request, $id)
    {
        $dataPenduduk = DataPenduduk::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'tahun' => 'required',
            'jumlah_penduduk' => 'required',
            'jumlah_perempuan' => 'required',
            'jumlah_laki_laki' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $dataPenduduk->tahun = $request->tahun;
        $dataPenduduk->jumlah_penduduk = $request->jumlah_penduduk;
        $dataPenduduk->jumlah_perempuan = $request->jumlah_perempuan;
        $dataPenduduk->jumlah_laki_laki = $request->jumlah_laki_laki;

        $dataPenduduk->save();

        Session::flash('success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dataPenduduk = DataPenduduk::findOrFail($id);
        $dataPenduduk->delete();
        
        Session::flash('success');

        return redirect()->back();
    }
}
