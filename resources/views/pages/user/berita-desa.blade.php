@extends('layouts.app')

@section('title', 'Desa Batursari | Berita Desa')

@section('content')

<section class="py-1 text-center container">
    <div class="row py-lg-3">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h3 class="fw-light">Berita Desa Batursari</h3>
        </div>
    </div>
</section>

<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/posts">
            <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="Search.." value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if($beritaDesa->count() !== 0)
<div class="card mb-3">
    <img src="{{ asset('berita-desa/' . $beritaDesa[0]->img_berita) }}" class="card-img-top" alt="{{ $beritaDesa[0]->img_berita }}" width="100%">
    <div class="card-body text-center">
        <h5 class="card-title fw-bold"><a href="{{ route('tampilBeritaDesa',  $beritaDesa[0]->slug) }}" style="text-decoration: none">{{ $beritaDesa[0]->judul }}</a></h5>
        <p class="card-text"><small>{{ $beritaDesa[0]->created_at->diffForHumans() }}</small>, <i class="bi bi-person-fill"></i> Admin</p>
        <p class="card-text">{{ $beritaDesa[0]->excerpt }}</p>
        <a class="btn btn-primary" href="{{ route('tampilBeritaDesa', $beritaDesa[0]->slug) }}">Read more</a>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($beritaDesa->skip(1) as $berita)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ asset('berita-desa/' . $berita->img_berita) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $berita->judul }}</h5>
                    <p class="card-text">{{ $berita->excerpt }}</p>
                    <p class="card-text">
                        <small class="text-muted">
                            <p class="card-text"><small>{{ $berita->created_at->diffForHumans() }}</small>, <i class="bi bi-person-fill"></i> Admin</p>
                        </small>
                    </p>
                    <a class="btn btn-primary" href="{{ route('tampilBeritaDesa', $berita->slug) }}">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<div style="margin-bottom: 100vh"></div>
@endif

@endsection

