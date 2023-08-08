@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Preview Berita Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('beritaDesaAdmin') }}">Berita Desa</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{ Str::limit($beritaDesa->judul, 40) }}</li>
</ol>

<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <h1 class="mb-4">{{ $beritaDesa->judul }}</h1>
            <div class="row mb-4">
                <div class="col-md-7">
                    <a href="{{ route('editBeritaDesaAdmin', $beritaDesa->id) }}" class="btn btn-success">Edit Berita</a>
                </div>
            </div>
            <p><i class="bi bi-calendar me-1" style="font-size: 20px"></i>{{ $beritaDesa->created_at }} <i class="bi bi-person-fill ms-3" style="font-size: 20px"></i> Admin</p>
            
            <img src="{{ asset('berita-desa/' . $beritaDesa->img_berita) }}" class="img-fluid" alt="">

            <article class="my-3 fs-5">
                <p>{!! $beritaDesa->body !!}</p>
            </article>
        </div>
    </div>
</div>

@endsection

