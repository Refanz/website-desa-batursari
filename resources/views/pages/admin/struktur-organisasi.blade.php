@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Struktur Organisasi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
</ol>

<h5>Susunan Organisasi dan Tata Kerja Pemerintahan Desa</h5>

<div class="row">
    <div class="col-md-8">
        <div class="callout callout-info">
            <h4>Info Gambar</h4>
            Gambar di bawah ini adalah gambar yang ditampilkan ke halaman struktur organisasi!
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        @isset($dataStrukturOrganisasi)
        <img src="{{ asset('img-struktur-organisasi/' . $dataStrukturOrganisasi->img_struktur_organisasi ) }}" alt="" width="100%">    
        @endisset
    </div>
</div>

<form action="{{ route('editStrukturOrganisasi') }}" class="my-3" method="POST" enctype="multipart/form-data">
    @csrf
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Edit data struktur organisasi desa berhasil!
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
            <label for="struktur_organisasi" class="form-label">Struktur Organisasi</label>
            <input type="file" name="img_struktur_organisasi" id="img-input" class="form-control">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-5">
            <img src="#" alt="" id="img-preview" width="100%">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-5">
            <button class="btn btn-primary">Ubah Struktur Organisasi</button>
        </div>
    </div>
</form>

@endsection

