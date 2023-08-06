@extends('layouts.app')

@section('title', 'Desa Batursari | Kegiatan Desa')

@section('content')

@if(isset($dataKegiatanDesa))
    
@else
    <div style="margin-bottom: 100vh"></div>
@endif

@endsection