@extends('layouts.app')

@section('title', $beritaDesa->judul)

@section('meta-description', strip_tags($beritaDesa->body))

@section('meta-keywords', $beritaDesa->judul)

@section('content')

<div class="container">
    <div class="row justify-content-center mb-3">
        <div class="col-md-8">
            <h1 class="mb-4">{{ $beritaDesa->judul }}</h1>
     
            <p><i class="bi bi-calendar me-1" style="font-size: 20px"></i>{{ $beritaDesa->created_at }} <i class="bi bi-person-fill ms-3" style="font-size: 20px"></i> Admin</p>
            
            <img src="{{ asset('berita-desa/' . $beritaDesa->img_berita) }}" class="img-fluid" alt="">

            <article class="my-3 fs-5">
                <p>{!! $beritaDesa->body !!}</p>
            </article>

            <a href="{{ route('beritaDesa') }}">Kembali ke daftar berita</a>
        </div>
    </div>
</div>

@endsection

