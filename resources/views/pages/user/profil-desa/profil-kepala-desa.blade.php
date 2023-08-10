@extends('layouts.app')

@section('meta-description', 'Kepala Desa Batursari')

@section('meta-keywords', 'Kades, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Profil Kepala Desa')

@section('content')

<h4 class="fw-bold">PROFIL KEPALA DESA BATURSARI</h4>

@if(isset($dataProfilKepalaDesa))
    <div class="row">
        <div class="col-md-3">
            <img src="{{ asset('img-profil-kepala-desa/' . $dataProfilKepalaDesa->img_kepala_desa) }}" alt="" width="100%">
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Nama Kepala Desa:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->nama }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Tempat dan Tanggal Lahir:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->tempat_tanggal_lahir }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Jenis Kelamin:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->jenis_kelamin }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Status:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->status }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Nama Suami/Istri:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->nama_pasangan }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Jumlah Anak:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->jumlah_anak }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>No Telepon:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->no_telp }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Jabatan:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->jabatan }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>No SK:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->no_sk }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Alamat:</p>
                </div>
                <div class="col-md-8 col-6">
                    {{ $dataProfilKepalaDesa->alamat }}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-6">
                    <p>Riwayat Pendidikan:</p>
                </div>
                <div class="col-md-8 col-12">
                    <ul class="list-group">
                        @foreach (explode(', ', $dataProfilKepalaDesa->pendidikan_formal) as $data)
                        <li class="list-group-item">{{ $data }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@else
    <div style="margin-bottom: 100vh"></div>
@endif

@endsection