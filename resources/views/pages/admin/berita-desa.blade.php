@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Berita Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Berita Desa</li>
</ol>

<div class="row mb-3">
    <div class="col-md-5">
        <a href="{{ route('tambahBeritaDesaAdmin') }}" class="btn btn-primary">Tambah Berita Desa</a>
    </div>
</div>

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Hapus berita desa berhasil!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="card mb-4">
    <div class="card-header">
        <i class="bi bi-table me-1"></i>
        Tabel Berita Desa Batursari
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table id="tb-galeri-desa" class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Judul Berita</th>
                            <th>Slug</th>
                            <th>Kutipan</th>
                            <th>Isi Berita</th>
                            <th>Foto Berita</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beritaDesa as $data)
                        <tr>
                            <td>{{ $data->judul }}</td>
                            <td>{{ $data->slug }}</td>
                            <td>{{ $data->excerpt }}</td>
                            <td>{{ strip_tags(Str::limit($data->body, 150)) }}</td>
                            <td><img src="@isset($data->img_berita){{ asset('berita-desa/' . $data->img_berita) }}@endisset" alt="" width="200px"></td>
                            <td>
                                <div class="d-flex mt-2">
                                    <form action="{{ route('hapusBeritaDesaAdmin', $data->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger me-2" type="submit" onclick="return confirm('Yakin untuk hapus?')">Hapus</button>
                                    </form>
                                    <a href="{{ route('editBeritaDesaAdmin', $data->id) }}" class="btn btn-primary me-2">Edit</a>
                                    <a href="{{ route('tampilBeritaDesa', $data->slug) }}" class="btn btn-success">Detail</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection

