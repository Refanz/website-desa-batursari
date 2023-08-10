@extends('layouts.app')

@section('meta-description', 'Profil Desa Batursari')

@section('meta-keywords', 'Profil, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Profile Desa')

@section('content')

<h4 class="fw-bold">PROFIL DESA BATURSARI</h4>

@if(isset($dataProfilDesa))
    <img src="{{ asset('img-profil-desa/'.$dataProfilDesa->img_desa) }}" alt="" width="100%">
    <div class="deskripsi-desa mt-2">
        {!! $dataProfilDesa->deskripsi !!}
    </div>
@else
    <div style="margin-bottom: 100vh"></div>
@endif



@endsection

