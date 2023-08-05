@extends('layouts.app')

@section('title', 'Desa Batursari | Struktur Organisasi')

@section('content')

<h4 class="fw-bold">STRUKTUR ORGANISASI PEMERINTAHAN DESA BATURSARI</h4>

@if(isset($dataStrukturOrganisasi))
    <div class="text-center mt-4">
        <img src="{{ asset('img-struktur-organisasi/' . $dataStrukturOrganisasi->img_struktur_organisasi) }}" alt="" width="100%">
    </div>
@else
    <div style="margin-bottom: 100vh"></div>
@endif



@endsection

