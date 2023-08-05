@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Tambah Data Profil Perangkat Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('tambahProfilPerangkatDesaAdmin') }}">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('profilPerangkatDesaAdmin') }}">Profil Perangkat Desa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Data Profil Perangkat Desa</li>
</ol>

<form action="{{ route('tambahProfilPerangkatDesaAdmin') }}" method="POST" class="my-3" enctype="multipart/form-data">
    @csrf

    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Tambah data profil perangkat desa berhasil!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row mt-3">
        <div class="col-md-7">
            <div class="callout callout-info">
                <h4>Info Penting</h4>
                Jika ada data yang masih kosong isi dengan tanda "-" !
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" required>
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select" required>
                <option value="">- Pilih jenis kelamin -</option>
                <option value="Laki - Laki">Laki - Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
        </div>

        <div class="col-md-4 mt-3 mt-md-0">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="">- Pilih Status -</option>
                <option value="Menikah">Menikah</option>
                <option value="Belum Menikah">Belum Menikah</option>
                <option value="Duda">Duda</option>
                <option value="Janda">Janda</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <label for="no_telepon" class="form-label">No Telepon</label>
            <input type="text" id="no_telepon" class="form-control" name="no_telepon" required>
        </div>
        <div class="col-md-4">
            <label for="nama_pasangan" class="form-label mt-3 mt-md-0">Nama Suami/Istri</label>
            <input type="text" class="form-control" id="nama_pasangan" name="nama_pasangan" required>
        </div>
        <div class="col-md-4">
            <label for="jumlah_anak" class="form-label mt-3 mt-md-0">Jumlah Anak</label>
            <input type="number" class="form-control" id="jumlah_anak" name="jumlah_anak" value=0 required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" id="jabatan" class="form-control" name="jabatan" required>
        </div>
        <div class="col-md-4">
            <label for="no_sk" class="form-label mt-3 mt-md-0">No SK</label>
            <input type="text" id="no_sk" class="form-control" name="no_sk" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="callout callout-info">
                <h4>Info Mengisi Informasi Pendidikan</h4>
                Jika memasukkan lebih dari 1 riwayat pendidikan <br>
                pisahkan dengan tanda koma!
            </div>

            <label for="pendidikan_formal" class="form-label">Pendidikan Formal</label>
            <textarea name="pendidikan_formal" id="pendidikan_formal" rows="7" class="form-control" required></textarea>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" rows="7" class="form-control" required></textarea>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="img-input" class="form-label mt-3">Unggah Foto Perangkat Desa</label>
            <input type="file" name="img_perangkat_desa" id="img-input" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <img src="#" alt="" id="img-preview" width="100%">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Tambah Profil Perangkat Desa</button>
        </div>
    </div>
</form>

@endsection

