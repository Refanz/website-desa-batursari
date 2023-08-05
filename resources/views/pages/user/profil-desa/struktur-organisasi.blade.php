@extends('layouts.app')

@section('title', 'Desa Batursari | Struktur Organisasi')

@section('content')

<h4 class="fw-bold">STRUKTUR ORGANISASI PEMERINTAHAN DESA BATURSARI</h4>

<div class="text-center mt-4">
    @isset($dataStrukturOrganisasi)
        <img src="{{ asset('img-struktur-organisasi/' . $dataStrukturOrganisasi->img_struktur_organisasi) }}" alt="" width="100%">
    @endisset
</div>

@endsection