@extends('layouts.app')

@section('meta-description', 'Kegiatan Desa Batursari')

@section('meta-keywords', 'Kegiatan, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Kegiatan Desa')

@section('content')

<section class="py-1 text-center container">
    <div class="row py-lg-3">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h3 class="fw-light">Kegiatan Desa Batursari</h3>
            <p class="lead text-muted">Berisi kegiatan - kegiatan di Desa Batursari </p>
        </div>
    </div>
</section>

@if($kegiatanDesa->count() !== 0)
<div class="row row-cols-1 row-cols-md-2 g-4" style="margin-bottom: 50vh">
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
@else
<div style="margin-bottom: 100vh"></div>
@endif

@endsection

