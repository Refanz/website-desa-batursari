@extends('layouts.app')

@section('title', 'Desa Batursari | Berita Desa')

@section('content')

@if(isset($dataBeritaDesa))
    
@else
    <div style="margin-bottom: 100vh"></div>
@endif

@endsection