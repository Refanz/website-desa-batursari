<?php

namespace App\Http\Controllers;

use App\Models\PetaDesa;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StorePetaDesaRequest;
use App\Http\Requests\UpdatePetaDesaRequest;

class PetaDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = PetaDesa::first();

        return view('pages.admin.peta-desa')->with([
            'dataPetaDesa' => $data
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
    public function store(StorePetaDesaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(PetaDesa $petaDesa)
    {
        $data = $petaDesa->first();

        return view('pages.user.profil-desa.peta-desa')->with([
            'dataPetaDesa' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PetaDesa $petaDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetaDesaRequest $request, PetaDesa $petaDesa)
    {
        $validator = Validator::make($request->all(), [
            'img-_peta_desa' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($request->hasFile('img_peta_desa')) {
            $imgPetaDesa = $request->file('img_peta_desa');
            $imgName = time() . '.' . $imgPetaDesa->getClientOriginalExtension();
            $imgPetaDesa->move(public_path('img-peta-desa'), $imgName);

            $petaDesa->img_peta_desa = $imgName;

            if ($petaDesa->count() < 1) {
                $petaDesa->save();

                Session::flash('success');

                return redirect()->back();
            } else {
                $dataPetaDesa = $petaDesa->findOrFail($petaDesa->first()->id);

                $path = public_path('img-peta-desa/') . $dataPetaDesa->img_peta_desa;
                File::delete($path);

                $dataPetaDesa->img_peta_desa = $imgName;

                $dataPetaDesa->save();

                Session::flash('success');

                return redirect()->back();
            }
        } else {
            $dataPetaDesa = $petaDesa->findOrFail($petaDesa->first()->id);
            $dataPetaDesa->img_peta_desa = $dataPetaDesa->img_peta_desa;

            $dataPetaDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PetaDesa $petaDesa)
    {
        //
    }
}
