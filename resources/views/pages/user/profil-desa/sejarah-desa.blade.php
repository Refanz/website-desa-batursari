@extends('layouts.app')

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