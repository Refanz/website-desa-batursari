@extends('layouts.app')

@section('meta-description', 'Sejarah Desa Batursari')

@section('meta-keywords', 'Sejarah, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Sejarah Desa')

@section('content')

<h4 class="fw-bold">SEJARAH DESA BATURSARI</h4>

@if(isset($dataSejarahDesa))
    <img src="{{ asset('img-sejarah-desa/'.$dataSejarahDesa->img_sejarah) }}" alt="" width="100%">
    <div class="deskripsi-desa mt-2">
        {!! $dataSejarahDesa->deskripsi_sejarah !!}
    </div>
@else
    <div style="margin-bottom: 100vh"></div>
@endif

@endsection