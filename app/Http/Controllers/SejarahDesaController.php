<?php

namespace App\Http\Controllers;

use App\Models\SejarahDesa;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreSejarahDesaRequest;
use App\Http\Requests\UpdateSejarahDesaRequest;

class SejarahDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SejarahDesa::first();

        return view('pages.admin.sejarah-desa')->with([
            'dataSejarahDesa' => $data
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
    public function store(StoreSejarahDesaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SejarahDesa $sejarahDesa)
    {
        $data = $sejarahDesa->first();

        return view('pages.user.profil-desa.sejarah-desa')->with([
            'dataSejarahDesa' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SejarahDesa $sejarahDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSejarahDesaRequest $request, SejarahDesa $sejarahDesa)
    {
        $validator = Validator::make($request->all(), [
            'img-sejarah-desa' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi-sejarah' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($request->hasFile('img-sejarah-desa')) {
            $imgSejarah = $request->file('img-sejarah-desa');
            $imgName = time() . '.' . $imgSejarah->getClientOriginalExtension();
            $imgSejarah->move(public_path('img-sejarah-desa'), $imgName);

            $sejarahDesa->deskripsi_sejarah = $request->input('deskripsi-sejarah');
            $sejarahDesa->img_sejarah = $imgName;

            if ($sejarahDesa->count() < 1) {
                $sejarahDesa->save();

                Session::flash('success');

                return redirect()->back();
            } else {
                $dataSejarahDesa = $sejarahDesa->findOrFail($sejarahDesa->first()->id);
                
                $path = public_path('img-sejarah-desa/'). $dataSejarahDesa->img_sejarah;
                File::delete($path);

                $dataSejarahDesa->img_sejarah = $imgName;
                $dataSejarahDesa->deskripsi_sejarah = $request->input('deskripsi-sejarah');

                $dataSejarahDesa->save();

                Session::flash('success');

                return redirect()->back();

            }
        } else {
            $dataSejarahDesa = $sejarahDesa->findOrFail($sejarahDesa->first()->id);

            $dataSejarahDesa->img_sejarah = $dataSejarahDesa->img_sejarah;
            $dataSejarahDesa->deskripsi_sejarah = $request->input('deskripsi-sejarah');

            $dataSejarahDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SejarahDesa $sejarahDesa)
    {
        //
    }
}
