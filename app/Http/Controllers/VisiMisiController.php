<?php

namespace App\Http\Controllers;

use App\Models\VisiMisi;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreVisiMisiRequest;
use App\Http\Requests\UpdateVisiMisiRequest;
use Illuminate\Support\Facades\Session;

class VisiMisiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreVisiMisiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(VisiMisi $visiMisi)
    {
        $data = VisiMisi::select('visi', 'misi')->first();
        $misi = [];

        if (!$visiMisi->count() < 1) {
            $misi = explode(",", $data->misi);
        }

        return view('pages.user.profil-desa.visimisi-desa')->with([
            'misi' => $misi,
            'data' => $data
        ]);
    }

    public function showAdmin(VisiMisi $visiMisi)
    {
        $data = VisiMisi::select('visi', 'misi')->first();

        $misi = [];

        if (!$visiMisi->count() < 1) {
            $misi = explode(",", $data->misi);
        }

        return view('pages.admin.visi-misi')->with([
            'misi' => $misi,
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(VisiMisi $visiMisi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVisiMisiRequest $request, VisiMisi $visiMisi)
    {
        $validator = Validator::make($request->all(), [
            'visi-desa' => 'required',
            'misi-desa' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($visiMisi->count() < 1) {
            $visiMisi->visi = $request->input('visi-desa');
            $visiMisi->misi = $request->input('misi-desa');

            $visiMisi->save();

            Session::flash('success');

            return redirect()->back();
        } else {
            $data = $visiMisi->first();

            $data->visi = $request->input('visi-desa');
            $data->misi = $request->input('misi-desa');

            $data->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(VisiMisi $visiMisi)
    {
        //
    }
}
