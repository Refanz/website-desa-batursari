@extends('layouts.app')

@section('title', 'Desa Batursari | Profile Desa')

@section('content')

<h4 class="fw-bold">PROFIL DESA BATURSARI</h4>

<img src="{{ asset('img-profil-desa/'.$dataProfilDesa->img_desa) }}" alt="" width="100%">

<div class="deskripsi-desa mt-2">
    {!! $dataProfilDesa->deskripsi !!}
</div>

@endsection
