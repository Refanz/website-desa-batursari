@extends('layouts.app')

@section('meta-description', 'Perangkat Desa Batursari')

@section('meta-keywords', 'Perangkat Desa, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Profil Perangkat Desa')

@section('content')

<h4 class="fw-bold mb-3">PROFIL PERANGKAT DESA BATURSARI</h4>

@if($dataPerangkatDesa->count() !== 0)
<div class="row">
    @foreach ($dataPerangkatDesa as $data)
    <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img-profil-perangkat-desa/' . $data->img_perangkat_desa) }}" class="img-fluid rounded-start" alt="..." width="100%">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->nama }}</h5>
                        <div class="row">
                            <div class="col-md-6 fw-bold">
                                Jabatan:
                            </div>
                            <div class="col-md-6">
                                {{ $data->jabatan }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 fw-bold">
                                No SK:
                            </div>
                            <div class="col-md-6">
                                {{ $data->no_sk }}
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-5">
                                <a href="{{ route('tampilProfilPerangkatDesaAdmin', $data->id ) }}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@else
<div style="margin-bottom: 100vh"></div>
@endif

@endsection

