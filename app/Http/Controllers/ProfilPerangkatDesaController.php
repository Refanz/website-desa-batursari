<?php

namespace App\Http\Controllers;

use App\Models\ProfilPerangkatDesa;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProfilPerangkatDesaRequest;
use App\Http\Requests\UpdateProfilPerangkatDesaRequest;

class ProfilPerangkatDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProfilPerangkatDesa::all();

        return view('pages.admin.profil-perangkat-desa')->with([
            'dataPerangkatDesa' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.perangkat-desa.tambah-data-perangkat-desa');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfilPerangkatDesaRequest $request)
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
            'img_perangkat_desa' => 'image|mimes:jpeg,png,jpg,gif|max:1024'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $ttl = $request->input('tempat_lahir') . ', ' . $request->input('tanggal_lahir');

        $profilPerangkatDesa = new ProfilPerangkatDesa();

        if ($request->hasFile('img_perangkat_desa')) {
            $imgPerangkatDesa = $request->file('img_perangkat_desa');
            $imgName = time() . '.' . $imgPerangkatDesa->getClientOriginalExtension();
            $imgPerangkatDesa->move(public_path('img-profil-perangkat-desa'), $imgName);

            $profilPerangkatDesa->nama = $request->input('nama_lengkap');
            $profilPerangkatDesa->tempat_tanggal_lahir = $ttl;
            $profilPerangkatDesa->jenis_kelamin = $request->input('jenis_kelamin');
            $profilPerangkatDesa->status = $request->input('status');
            $profilPerangkatDesa->no_telp = $request->input('no_telepon');
            $profilPerangkatDesa->nama_pasangan = $request->input('nama_pasangan');
            $profilPerangkatDesa->jumlah_anak = $request->input('jumlah_anak');
            $profilPerangkatDesa->jabatan = $request->input('jabatan');
            $profilPerangkatDesa->no_sk = $request->input('no_sk');
            $profilPerangkatDesa->pendidikan_formal = $request->input('pendidikan_formal');
            $profilPerangkatDesa->alamat = $request->input('alamat');
            $profilPerangkatDesa->img_perangkat_desa = $imgName;

            $profilPerangkatDesa->save();

            Session::flash('success');

            return redirect()->back();
        } else {
            $profilPerangkatDesa->nama = $request->input('nama_lengkap');
            $profilPerangkatDesa->tempat_tanggal_lahir = $ttl;
            $profilPerangkatDesa->jenis_kelamin = $request->input('jenis_kelamin');
            $profilPerangkatDesa->status = $request->input('status');
            $profilPerangkatDesa->no_telp = $request->input('no_telepon');
            $profilPerangkatDesa->nama_pasangan = $request->input('nama_pasangan');
            $profilPerangkatDesa->jumlah_anak = $request->input('jumlah_anak');
            $profilPerangkatDesa->jabatan = $request->input('jabatan');
            $profilPerangkatDesa->no_sk = $request->input('no_sk');
            $profilPerangkatDesa->pendidikan_formal = $request->input('pendidikan_formal');
            $profilPerangkatDesa->alamat = $request->input('alamat');
            $profilPerangkatDesa->img_perangkat_desa = '';

            $profilPerangkatDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilPerangkatDesa $profilPerangkatDesa)
    {
        $data = $profilPerangkatDesa->all();

        return view('pages.user.profil-desa.profil-perangkat-desa')->with([
            'dataPerangkatDesa' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = ProfilPerangkatDesa::findOrFail($id);

        $ttl = ['', ''];

        if (isset($data)) {
            $ttl = explode(', ', $data->tempat_tanggal_lahir);
        }

        return view('pages.admin.perangkat-desa.edit-data-profil-perangkat-desa')->with([
            'dataProfilPerangkatDesa' => $data,
            'ttl' => $ttl
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfilPerangkatDesaRequest $request, $id)
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
            'img_perangkat_desa' => 'image|mimes:jpeg,png,jpg,gif|max:1024'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $profilPerangkatDesa = ProfilPerangkatDesa::findOrFail($id);

        if ($request->hasFile('img_perangkat_desa')) {
            $imgPerangkatDesa = $request->file('img_perangkat_desa');
            $imgName = time() . '.' . $imgPerangkatDesa->getClientOriginalExtension();
            $imgPerangkatDesa->move(public_path('img-profil-perangkat-desa/'), $imgName);

            $ttl = $request->input('tempat_lahir') . ', ' . $request->input('tanggal_lahir');

            $profilPerangkatDesa->nama = $request->input('nama_lengkap');
            $profilPerangkatDesa->tempat_tanggal_lahir = $ttl;
            $profilPerangkatDesa->jenis_kelamin = $request->input('jenis_kelamin');
            $profilPerangkatDesa->status = $request->input('status');
            $profilPerangkatDesa->no_telp = $request->input('no_telepon');
            $profilPerangkatDesa->nama_pasangan = $request->input('nama_pasangan');
            $profilPerangkatDesa->jumlah_anak = $request->input('jumlah_anak');
            $profilPerangkatDesa->jabatan = $request->input('jabatan');
            $profilPerangkatDesa->no_sk = $request->input('no_sk');
            $profilPerangkatDesa->pendidikan_formal = $request->input('pendidikan_formal');
            $profilPerangkatDesa->alamat = $request->input('alamat');
            $profilPerangkatDesa->img_perangkat_desa = $imgName;

            if ($profilPerangkatDesa->count() < 1) {
                $profilPerangkatDesa->save();

                Session::flash('success');

                return redirect()->back();
            } else {
                $dataPerangkatDesa = $profilPerangkatDesa->findOrFail($id);

                $path = public_path('img-profil-perangkat-desa/') . $dataPerangkatDesa->img_perangkat_desa;
                File::delete($path);

                $dataPerangkatDesa->nama = $request->input('nama_lengkap');
                $dataPerangkatDesa->tempat_tanggal_lahir = $ttl;
                $dataPerangkatDesa->jenis_kelamin = $request->input('jenis_kelamin');
                $dataPerangkatDesa->status = $request->input('status');
                $dataPerangkatDesa->no_telp = $request->input('no_telepon');
                $dataPerangkatDesa->nama_pasangan = $request->input('nama_pasangan');
                $dataPerangkatDesa->jumlah_anak = $request->input('jumlah_anak');
                $dataPerangkatDesa->jabatan = $request->input('jabatan');
                $dataPerangkatDesa->no_sk = $request->input('no_sk');
                $dataPerangkatDesa->pendidikan_formal = $request->input('pendidikan_formal');
                $dataPerangkatDesa->alamat = $request->input('alamat');
                $dataPerangkatDesa->img_perangkat_desa = $imgName;

                $dataPerangkatDesa->save();

                Session::flash('success');

                return redirect()->back();
            }
        } else {
            $dataPerangkatDesa = $profilPerangkatDesa->findOrFail($id);

            $ttl = $request->input('tempat_lahir') . ', ' . $request->input('tanggal_lahir');

            $dataPerangkatDesa->nama = $request->input('nama_lengkap');
            $dataPerangkatDesa->tempat_tanggal_lahir = $ttl;
            $dataPerangkatDesa->jenis_kelamin = $request->input('jenis_kelamin');
            $dataPerangkatDesa->status = $request->input('status');
            $dataPerangkatDesa->no_telp = $request->input('no_telepon');
            $dataPerangkatDesa->nama_pasangan = $request->input('nama_pasangan');
            $dataPerangkatDesa->jumlah_anak = $request->input('jumlah_anak');
            $dataPerangkatDesa->jabatan = $request->input('jabatan');
            $dataPerangkatDesa->no_sk = $request->input('no_sk');
            $dataPerangkatDesa->pendidikan_formal = $request->input('pendidikan_formal');
            $dataPerangkatDesa->alamat = $request->input('alamat');
            $dataPerangkatDesa->img_perangkat_desa = $dataPerangkatDesa->img_perangkat_desa;

            $dataPerangkatDesa->save();

            Session::flash('success');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = ProfilPerangkatDesa::findOrFail($id);

        $path = public_path('img-profil-perangkat-desa/') . $data->img_perangkat_desa;
        File::delete($path);

        $data->delete();
        
        Session::flash('success');

        return redirect()->back();
    }

    public function tampilDataPerangkatDesa($id)
    {
        $data = ProfilPerangkatDesa::findOrFail($id);

        return view('pages.user.perangkat-desa.tampil-data-profil-perangkat-desa')->with([
            'dataProfilPerangkatDesa' => $data
        ]);
    }
}
