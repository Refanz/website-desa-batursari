@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Profil Perangkat Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Profil Perangkat Desa</li>
</ol>

<div class="row mb-3">
    <div class="col-md-5">
        <a href="{{ route('tambahProfilPerangkatDesaAdmin') }}" class="btn btn-primary">Tambah Data Profil Perangkat Desa</a>
    </div>
</div>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Tabel Profil Perangkat Desa
    </div>
    <div class="card-body">
        <table id="tb-perangkat-desa" class="table nowrap" style="width: 100%">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Tempat dan Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
                    <th>Status</th>
                    <th>Alamat</th>
                    <th>No Telepon</th>
                    <th>Nama Suami/Istri</th>
                    <th>Jumlah Anak</th>
                    <th>Pendidikan Formal</th>
                    <th>Jabatan</th>
                    <th>No SK</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataPerangkatDesa as $data)
                <tr>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->tempat_tanggal_lahir }}</td>
                    <td>{{ $data->jenis_kelamin }}</td>
                    <td>{{ $data->status }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>{{ $data->no_telp }}</td>
                    <td>{{ $data->nama_pasangan }}</td>
                    <td>{{ $data->jumlah_anak }}</td>
                    <td>{{ $data->pendidikan_formal }}</td>
                    <td>{{ $data->jabatan }}</td>
                    <td>{{ $data->no_sk }}</td>
                    <td><img src="{{ asset('img-profil-perangkat-desa/' . $data->img_perangkat_desa) }}" alt="" width="200vw"></td>
                    <td>
                        <div class="d-flex">
                            <form action="{{ route('hapusProfilPerangkatDesaAdmin', $data->id) }}" method="POST">
                                @csrf
                                <button class="btn btn-danger me-2" type="submit">Hapus</button>
                            </form>
                            <a href="{{ route('editProfilPerangkatDesaAdmin', $data->id) }}" class="btn btn-primary">Edit</a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>

@endsection

