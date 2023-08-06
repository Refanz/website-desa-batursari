@extends('layouts.app')

@section('title', 'Desa Batursari | Profil Perangkat Desa')

@section('content')

<h4 class="fw-bold mb-3">PROFIL PERANGKAT DESA BATURSARI</h4>

@if(isset($dataPerangkatDesa))
<div class="row">
    @foreach ($dataPerangkatDesa as $data)
    <div class="col-md-6">
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{ asset('img-profil-perangkat-desa/' . $data->img_perangkat_desa) }}" class="img-fluid rounded-start" alt="...">
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
                                <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalDetailPerangkatDesa" onclick="getData(event)" data-id={{ $data->id }}>Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Modal -->
<div class="modal fade" id="modalDetailPerangkatDesa" tabindex="-1" aria-labelledby="modalDetailPerangkatDesaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalDetailPerangkatDesaLabel">Detail Profil Perangkat Desa</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
<!-- EndModal -->

@else
    <div style="margin-bottom: 100vh"></div>
@endif

@endsection

