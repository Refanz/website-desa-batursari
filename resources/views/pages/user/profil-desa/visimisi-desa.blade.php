@extends('layouts.app')

@section('title', 'Desa Batursari | Visi Misi Desa')

@section('content')

<h4 class="fw-bold">VISI DAN MISI DESA BATURSARI</h4>

<div class="text-center">
    <img class="mt-2" src="{{ asset('assets/images/visi-misi.png') }}" alt="" width="300px">
</div>

<div class="visi-misi-desa">
    <div class="visi-desa">
        <h5 class="text-center mt-3">VISI DESA</h5>
        <p>{{ $data->visi }}</p>
    </div>
    <div class="misi-desa p-0">
        <h5 class="text-center mt-4">MISI DESA</h5>
        <ol type="1">
            @foreach ($misi as $data)
            <li>{{ $data }}</li>
            @endforeach
        </ol>
    </div>
</div>

@endsection
