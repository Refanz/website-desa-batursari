@extends('layouts.app')

@section('meta-description', 'Galeri Desa Batursari')

@section('meta-keywords', 'Galeri, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Galeri')

@section('content')

<section class="py-1 text-center container">
    <div class="row py-lg-3">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h3 class="fw-light">Galeri Desa Batursari</h3>
            <p class="lead text-muted">Berisi foto - foto di Desa Batursari </p>
        </div>
    </div>
</section>

@if($galeriDesa->count() !== 0)
<div class="album py-3">
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 g-4">
            @foreach ($galeriDesa as $data)
            <div class="col">
                <div class="card shadow-sm">
                    <img src="{{ asset('galeri-desa/' . $data->img_galeri_desa) }}" alt="" class="bd-placeholder-img card-img-top" width="100%">
                    <div class="card-body">
                        <p class="card-text">{{ $data->deskripsi_gambar }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@else
<div style="margin-bottom: 100vh"></div>
@endif

@endsection

