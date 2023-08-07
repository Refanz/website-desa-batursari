@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Edit Kegiatan Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('kegiatanDesaAdmin') }}">Kegiatan Desa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Kegiatan Desa</li>
</ol>

<form action="{{ route('editKegiatanDesaAdmin', $kegiatanDesa->id) }}" method="POST" class="my-3" enctype="multipart/form-data">
    @csrf
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Edit kegiatan desa berhasil!
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

    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('kegiatan-desa/' . $kegiatanDesa->img_kegiatan) }}" alt="" width="100%">
        </div>
    </div>

    <div class="row mt-2">
        <div class="col-md-6">
            <label for="img-desa" class="form-label">Unggah Gambar</label>
            <input type="file" class="form-control" id="img-input" name="img_kegiatan" value="{{ $kegiatanDesa->img_kegiatan }}">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-5">
            <img src="#" alt="" width="100%" id="img-preview">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <label for="nama-kegiatan" class="form-label">Nama Kegiatan</label>
            <input type="text" id="nama-kegiatan" class="form-control" required name="nama_kegiatan" value="{{ $kegiatanDesa->nama_kegiatan }}">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-6">
            <label for="deskripsi-kegiatan" class="form-label">Deskripsi Kegiatan</label>
            <textarea name="deskripsi_kegiatan" id="" rows="8" class="form-control" required>{{ $kegiatanDesa->deskripsi_kegiatan }}</textarea>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Edit Kegiatan Desa</button>
        </div>
    </div>
</form>

@endsection

