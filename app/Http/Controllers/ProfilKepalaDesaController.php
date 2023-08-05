<?php

namespace App\Http\Controllers;

use App\Models\ProfilKepalaDesa;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProfilKepalaDesaRequest;
use App\Http\Requests\UpdateProfilKepalaDesaRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class ProfilKepalaDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProfilKepalaDesa::first();

        $ttl = ['', ''];

        if (isset($data)) {
            $ttl = explode(', ', $data->tempat_tanggal_lahir);
        }

        return view('pages.admin.profil-kepala-desa')->with([
            'dataProfilKepalaDesa' => $data,
            'ttl' => $ttl
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
    public function store(StoreProfilKepalaDesaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilKepalaDesa $profilKepalaDesa)
    {
        $data = ProfilKepalaDesa::first();

        return view('pages.user.profil-desa.profil-kepala-desa')->with([
            'dataProfilKepalaDesa' => $data
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilKepalaDesa $profilKepalaDesa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfilKepalaDesaRequest $request, ProfilKepalaDesa $profilKepalaDesa)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'status' => 'required',
            'no_telepon' => 'required',
            'nama_pasangan' => 'required',
            'jumlah_anak' => 'required',
            'jabatan' => 'required',
            'no_sk' => 'required',
            'pendidikan_formal' => 'required',
            'alamat' => 'required',
            'img_kepala_desa' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        if ($request->hasFile('img_kepala_desa')) {
            $imgKepalaDesa = $request->file('img_kepala_desa');
            $imgName = time() . '.' . $imgKepalaDesa->getClientOriginalExtension();
            $imgKepalaDesa->move(public_path('img-profil-kepala-desa'), $imgName);

            $ttl = $request->input('tempat_lahir') . ', ' . $request->input('tanggal_lahir');

            $profilKepalaDesa->nama = $request->input('nama_lengkap');
            $profilKepalaDesa->tempat_tanggal_lahir = $ttl;
            $profilKepalaDesa->jenis_kelamin = $request->input('jenis_kelamin');
            $profilKepalaDesa->status = $request->input('status');
            $profilKepalaDesa->no_telp = $request->input('no_telepon');
            $profilKepalaDesa->nama_pasangan = $request->input('nama_pasangan');
            $profilKepalaDesa->jumlah_anak = $request->input('jumlah_anak');
            $profilKepalaDesa->jabatan = $request->input('jabatan');
            $profilKepalaDesa->no_sk = $request->input('no_sk');
            $profilKepalaDesa->pendidikan_formal = $request->input('pendidikan_formal');
            $profilKepalaDesa->alamat = $request->input('alamat');
            $profilKepalaDesa->img_kepala_desa = $imgName;

            if ($profilKepalaDesa->count() < 1) {
                $profilKepalaDesa->save();

                Session::flash('success');

                return redirect()->back();
            } else {
                $dataKepalaDesa = $profilKepalaDesa->first();

                $path = public_path('img-profil-kepala-desa/') . $dataKepalaDesa->img_kepala_desa;
                File::delete($path);

                $dataKepalaDesa->nama = $request->input('nama_lengkap');
                $dataKepalaDesa->tempat_tanggal_lahir = $ttl;
                $dataKepalaDesa->jenis_kelamin = $request->input('jenis_kelamin');
                $dataKepalaDesa->status = $request->input('status');
                $dataKepalaDesa->no_telp = $request->input('no_telepon');
                $dataKepalaDesa->nama_pasangan = $request->input('nama_pasangan');
                $dataKepalaDesa->jumlah_anak = $request->input('jumlah_anak');
                $dataKepalaDesa->jabatan = $request->input('jabatan');
                $dataKepalaDesa->no_sk = $request->input('no_sk');
                $dataKepalaDesa->pendidikan_formal = $request->input('pendidikan_formal');
                $dataKepalaDesa->alamat = $request->input('alamat');
                $dataKepalaDesa->img_kepala_desa = $imgName;

                $dataKepalaDesa->save();

                Session::flash('success');

                return redirect()->back();
            }
        } else {
            $dataKepalaDesa = $profilKepalaDesa->first();

            $ttl = $request->input('tempat_lahir') . ', ' . $request->input('tanggal_lahir');

            $dataKepalaDesa->nama = $request->input('nama_lengkap');
            $dataKepalaDesa->tempat_tanggal_lahir = $ttl;
            $dataKepalaDesa->jenis_kelamin = $request->input('jenis_kelamin');
            $dataKepalaDesa->status = $request->input('status');
            $dataKepalaDesa->no_telp = $request->input('no_telepon');
            $dataKepalaDesa->nama_pasangan = $request->input('nama_pasangan');
            $dataKepalaDesa->jumlah_anak = $request->input('jumlah_anak');
            $dataKepalaDesa->jabatan = $request->input('jabatan');
            $dataKepalaDesa->no_sk = $request->input('no_sk');
            $dataKepalaDesa->pendidikan_formal = $request->input('pendidikan_formal');
            $dataKepalaDesa->alamat = $request->input('alamat');
            $dataKepalaDesa->img_kepala_desa = $dataKepalaDesa->img_kepala_desa;

            $dataKepalaDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilKepalaDesa $profilKepalaDesa)
    {
        //
    }
}
