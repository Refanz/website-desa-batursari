<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use App\Http\Requests\StoreStrukturOrganisasiRequest;
use App\Http\Requests\UpdateStrukturOrganisasiRequest;
use Illuminate\Support\Facades\Validator;

class StrukturOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.admin.struktur-organisasi')->with([
            ''
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
        //
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
            'img-input' => 'required|image|mimes:jpeg, png, jpg, gif|max2048',
        ]); 

        if ($validator->fails()) {
            return 'gagal';
        }

        if ($request->hasFile('img-input')) {
            $imgStrukturOrganisasi = $request->file('img-input');
            $imgName = time() . '.' . $imgStrukturOrganisasi->getClientOriginalExtension();
            $imgStrukturOrganisasi->move(public_path(), $imgName);

            
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
