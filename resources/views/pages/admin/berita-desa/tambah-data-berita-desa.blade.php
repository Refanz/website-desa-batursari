@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Tambah Berita Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('beritaDesaAdmin') }}">Berita Desa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Berita Desa</li>
</ol>

<form action="{{ route('tambahBeritaDesaAdmin') }}" method="POST" class="my-3" enctype="multipart/form-data">
    @csrf
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Tambah data berita desa berhasil!
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
            <label for="judul-berita" class="form-label">Judul Berita</label>
            <input type="text" name="judul_berita" id="judul-berita" class="form-control" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <label for="slug" class="form-label">Slug</label>
            <p class="text-danger">Slug terisi otomatis!</p>
            <input type="text" name="slug" id="slug" class="form-control" readonly>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <label for="isi_berita" class="form-label">Isi Berita</label>
            <input id="isi_berita" type="hidden" name="isi_berita" required>
            <trix-editor input="isi_berita" required></trix-editor>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <label for="img-desa" class="form-label">Unggah Gambar</label>
            <input type="file" class="form-control" id="img-input" name="img_berita" required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <img src="#" alt="" width="100%" id="img-preview">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Tambah Berita Desa</button>
        </div>
    </div>
</form>

<script>
    const title = document.querySelector('#judul-berita');
    const slug = document.querySelector('#slug');

    title.addEventListener('input', () => {
        fetch('/api/dashboard/berita-desa/slug?judul=' +title.value )
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });
</script>

@endsection

