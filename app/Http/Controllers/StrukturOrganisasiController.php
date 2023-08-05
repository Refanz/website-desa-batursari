<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreStrukturOrganisasiRequest;
use App\Http\Requests\UpdateStrukturOrganisasiRequest;
use Illuminate\Support\Facades\File;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = StrukturOrganisasi::first();

        return view('pages.admin.struktur-organisasi')->with([
            'dataStrukturOrganisasi' => $data
        ]);
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
    public function store(StoreStrukturOrganisasiRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(StrukturOrganisasi $strukturOrganisasi)
    {
        $data = $strukturOrganisasi->first();

        return view('pages.user.profil-desa.struktur-organisasi')->with([
            'dataStrukturOrganisasi' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(StrukturOrganisasi $strukturOrganisasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStrukturOrganisasiRequest $request, StrukturOrganisasi $strukturOrganisasi)
    {
        $validator = Validator::make($request->all(), [
            'img_struktur_organisasi' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]); 

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($request->hasFile('img_struktur_organisasi')) {
            $imgStrukturOrganisasi = $request->file('img_struktur_organisasi');
            $imgName = time() . '.' . $imgStrukturOrganisasi->getClientOriginalExtension();
            $imgStrukturOrganisasi->move(public_path('img-struktur-organisasi'), $imgName);

            $strukturOrganisasi->img_struktur_organisasi = $imgName;

            if ($strukturOrganisasi->count() < 1) {
                $strukturOrganisasi->save();

                Session::flash('success');

                return redirect()->back();
            } else {
                $dataStrukturOrganisasi = $strukturOrganisasi->first();

                $path = public_path('img-struktur-organisasi/' . $dataStrukturOrganisasi->img_struktur_organisasi);
                File::delete($path);

                $dataStrukturOrganisasi->img_struktur_organisasi = $imgName;

                $dataStrukturOrganisasi->save();

                Session::flash('success');

                return redirect()->back();
            }

        } else {
            $dataStrukturOrganisasi = $strukturOrganisasi->first();
            $dataStrukturOrganisasi->img_struktur_organisasi = $dataStrukturOrganisasi->img_struktur_organisasi;

            $dataStrukturOrganisasi->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(StrukturOrganisasi $strukturOrganisasi)
    {
        //
    }
}
