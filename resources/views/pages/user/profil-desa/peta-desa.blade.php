@extends('layouts.app')

@section('meta-description', 'Peta Desa Batursari')

@section('meta-keywords', 'Peta, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Peta Desa')

@section('content')

<h4 class="fw-bold">PETA DESA BATURSARI</h4>

@if(isset($dataPetaDesa))
    <div class="peta-desa mt-3">
        <div class="col-md-12">
            <img src="{{ asset('img-peta-desa/' . $dataPetaDesa->img_peta_desa) }}" alt="" width="100%">
        </div>
    </div>
@else
    <div style="margin-bottom: 100vh"></div>
@endif

@endsection