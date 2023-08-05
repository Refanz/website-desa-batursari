@extends('layouts.app')

@section('title', 'Desa Batursari | Profil Perangkat Desa')

@section('content')

<h4 class="fw-bold">PROFIL PERANGKAT DESA BATURSARI</h4>

@if(isset($datProfilPerangkatDesa))

@else
    <div style="margin-bottom: 100vh"></div>
@endif

@endsection