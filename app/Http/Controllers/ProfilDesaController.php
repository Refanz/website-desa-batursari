<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProfilDesaRequest;
use App\Http\Requests\UpdateProfilDesaRequest;

class ProfilDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = ProfilDesa::first();

        return view('pages.admin.profil-desa')->with([
            'dataProfilDesa' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfilDesaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilDesa $profilDesa)
    {
        $data = $profilDesa->first();

        return view('pages.user.profil-desa.profil-desa')->with([
            'dataProfilDesa' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilDesa $profilDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfilDesaRequest $request, ProfilDesa $profilDesa)
    {
        $validator = Validator::make($request->all(), [
            'img-profil-desa' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi-desa' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($request->hasFile('img_profil_desa')) {
            $imgDesa = $request->file('img_profil_desa');
            $imgName = time() . '.' . $imgDesa->getClientOriginalExtension();
            $imgDesa->move(public_path('img-profil-desa'), $imgName);

            $profilDesa->deskripsi = $request->input('deskripsi-desa');
            $profilDesa->img_desa = $imgName;

            if ($profilDesa->count() < 1) {
                $profilDesa->save();

                Session::flash('success');

                return redirect()->back();
            } else {
                $dataProfilDesa = $profilDesa->findOrFail($profilDesa->first()->id);

                $path = public_path('img-profil-desa/') . $dataProfilDesa->img_desa;
                File::delete($path);

                $dataProfilDesa->img_desa = $imgName;
                $dataProfilDesa->deskripsi = $request->input('deskripsi-desa');


                $dataProfilDesa->save();

                Session::flash('success');

                return redirect()->back();
            }
        } else {
            $dataProfilDesa = $profilDesa->findOrFail($profilDesa->first()->id);
            $dataProfilDesa->img_desa = $dataProfilDesa->img_desa;
            $dataProfilDesa->deskripsi = $request->input('deskripsi-desa');

            $dataProfilDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilDesa $profilDesa)
    {
        //
    }
}
