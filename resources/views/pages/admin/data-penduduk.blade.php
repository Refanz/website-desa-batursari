@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Data Penduduk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data Penduduk</li>
</ol>

<div class="row mb-3">
    <div class="col-md-5">
        <a href="{{ route('tambahDataPendudukAdmin') }}" class="btn btn-primary">Tambah Data Penduduk</a>
    </div>
</div>

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    Hapus data penduduk berhasil!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


<div class="card mb-4">
    <div class="card-header">
        <i class="bi bi-table me-1"></i>
        Tabel Data Penduduk Desa Batursari
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table id="tb-data-penduduk" class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>Jumlah Penduduk</th>
                            <th>Jumlah Jiwa Perempuan</th>
                            <th>Jumlah Jiwa Laki - Laki</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPenduduk as $data)
                        <tr>
                            <td>{{ $data->tahun }}</td>
                            <td>{{ $data->jumlah_penduduk }}</td>
                            <td>{{ $data->jumlah_perempuan }}</td>
                            <td>{{ $data->jumlah_laki_laki }}</td>
                            <td>
                                <div class="d-flex mt-2">
                                    <form action="{{ route('hapusDataPendudukAdmin', $data->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger me-2" type="submit" onclick="return confirm('Yakin untuk hapus?')">Hapus</button>
                                    </form>
                                    <a href="{{ route('editDataPendudukAdmin', $data->id) }}" class="btn btn-primary me-2">Edit</a>
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

