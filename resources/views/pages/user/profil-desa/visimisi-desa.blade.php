@extends('layouts.app')

@section('meta-description', 'Visi Misi Desa Batursari')

@section('meta-keywords', 'Visi Misi, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Visi Misi Desa')

@section('content')

<h4 class="fw-bold">VISI DAN MISI DESA BATURSARI</h4>

<div class="text-center">
    <img class="mt-2" src="{{ asset('assets/images/visi-misi.png') }}" alt="" width="300px">
</div>

<div class="visi-misi-desa" style="margin-bottom: 50vh">
    <div class="visi-desa">
        <h5 class="text-center mt-3">VISI DESA</h5>
        <p>@isset($data->visi){{ $data->visi }}@endisset</p>
    </div>
    <div class="misi-desa p-0">
        <h5 class="text-center mt-4">MISI DESA</h5>
        <ol type="1">
            @isset($misi)
                @foreach ($misi as $data)
                    <li>{{ $data }}</li>
                @endforeach
            @endisset
        </ol>
    </div>
</div>

@endsection

