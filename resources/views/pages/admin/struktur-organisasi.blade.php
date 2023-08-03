@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Struktur Organisasi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Struktur Organisasi</li>
</ol>

<h5>Susunan Organisasi dan Tata Kerja Pemerintahan Desa</h5>

<div class="row">
    <div class="col-md-6">
        <div class="callout callout-info">
            <h4>Info Gambar</h4>
            Gambar di bawah ini adalah gambar yang ditampilkan ke pengguna.
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-5">
        <img src="{{ asset('assets/images/struktur-organisasi.jpg') }}" alt="" width="100%">
    </div>
</div>

<form action="" class="my-3" method="POST">
    <div class="row">
        <div class="col-md-6">
            <label for="struktur_organisasi" class="form-label">Struktur Organisasi</label>
            <input type="file" name="" id="img-input" class="form-control">
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

