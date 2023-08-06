@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Profil Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profil Desa</li>
</ol>

<div class="row">
    <div class="col-md-8">
        <div class="callout callout-info">
            <h4>Info Gambar</h4>
            Gambar di bawah ini adalah gambar yang akan ditampilkan di halaman profil desa!
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        @isset($dataProfilDesa)
        <img src="{{ asset('img-profil-desa/' . $dataProfilDesa->img_desa) }}" alt="" width="100%">
        @endisset
    </div>
</div>

<form action="{{ route('editDataProfilDesa') }}" method="POST" class="my-3" enctype="multipart/form-data">
    @csrf
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Edit data profil desa berhasil!
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
        <div class="col-md-8">
            <label for="img-desa" class="form-label">Unggah Gambar</label>
            <input type="file" class="form-control" id="img-input" name="img_profil_desa" value="@isset($dataProfilDesa) {{ $dataProfilDesa->img_desa }} @endisset">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <img src="#" alt="" width="100%" id="img-preview">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <label for="deskripsi-desa" class="form-label">Deskripsi Desa</label>
            <input id="deskripsi-desa" value="@isset($dataProfilDesa) {{ $dataProfilDesa->deskripsi }} @endisset" type="hidden" name="deskripsi-desa" required>
            <trix-editor input="deskripsi-desa" required></trix-editor>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Edit Profil Desa</button>
        </div>
    </div>
</form>

@endsection

