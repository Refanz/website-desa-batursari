@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Kegaiatan Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kegiatan Desa</li>
</ol>

<div class="row mb-3">
    <div class="col-md-5">
        <a href="{{ route('tambahKegiatanDesaAdmin') }}" class="btn btn-primary">Tambah Kegiatan Desa</a>
    </div>
</div>

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Hapus kegiatan desa berhasil!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="card mb-4">
    <div class="card-header">
        <i class="bi bi-table me-1"></i>
        Tabel Kegiatan Desa Batursari
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table id="tb-kegiatan-desa" class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Nama Kegiatan</th>
                            <th>Deskripsi Kegiatan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatanDesa as $data)
                        <tr>
                            <td>{{ $data->nama_kegiatan }}</td>
                            <td>{{ $data->deskripsi_kegiatan }}</td>
                            <td><img src="@isset($data->img_kegiatan){{ asset('kegiatan-desa/' . $data->img_kegiatan) }}@endisset" alt="" width="200px"></td>
                            <td>
                                <div class="d-flex mt-2">
                                    <form action="{{ route('hapusKegiatanDesaAdmin', $data->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger me-2" type="submit" onclick="return confirm('Yakin untuk hapus?')">Hapus</button>
                                    </form>
                                    <a href="{{ route('editKegiatanDesaAdmin', $data->id) }}" class="btn btn-primary">Edit</a>
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

