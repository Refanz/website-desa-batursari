@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Galeri Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Galeri Desa</li>
</ol>

<div class="row mb-3">
    <div class="col-md-5">
        <a href="{{ route('tambahGaleriDesaAdmin') }}" class="btn btn-primary">Tambah Galeri Desa</a>
    </div>
</div>

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Hapus galeri desa berhasil!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="card mb-4">
    <div class="card-header">
        <i class="bi bi-table me-1"></i>
        Tabel Galeri Desa Batursari
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table id="tb-galeri-desa" class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($galeriDesa as $data)
                        <tr>
                            <td><img src="@isset($data->img_galeri_desa){{ asset('galeri-desa/' . $data->img_galeri_desa) }}@endisset" alt="" width="200px"></td>
                            <td>{{ $data->deskripsi_gambar }}</td>
                            <td>
                                <div class="d-flex mt-2">
                                    <form action="{{ route('hapusGaleriDesaAdmin', $data->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger me-2" type="submit" onclick="return confirm('Yakin untuk hapus?')">Hapus</button>
                                    </form>
                                    <a href="{{ route('editGaleriDesaAdmin', $data->id) }}" class="btn btn-primary">Edit</a>
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

