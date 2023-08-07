@extends('layouts.app')

@section('title', 'Desa Batursari | Kegiatan Desa')

@section('content')

@if(isset($kegiatanDesa))
<section class="py-1 text-center container" style="margin-bottom: 40vh">
    <div class="row py-lg-3">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Kegiatan Desa Batursari</h1>
            <p class="lead text-muted">Berisi kegiatan - kegiatan di Desa Batursari </p>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($kegiatanDesa as $data)
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('kegiatan-desa/' . $data->img_kegiatan) }}" class="card-img-top" alt="..." width="100%" height="300vh">
                <div class="card-body">
                    <h5 class="card-title">{{ $data->nama_kegiatan }}</h5>
                    <p class="card-text">{{ $data->deskripsi_kegiatan }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@else
<div style="margin-bottom: 100vh"></div>
@endif

@endsection

