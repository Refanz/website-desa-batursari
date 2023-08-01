@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Visi Misi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
</ol>

<div class="row">
    <div class="col-md-2">
        <h5>Visi</h5>
    </div>
</div>
<div class="row">
    <div class="col-md-7">
        <textarea name="" id="" cols="70" rows="4" class="form-control">{{ $data->visi }}</textarea>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-2">
        <h5>Misi</h5>
    </div>
</div>
<div class="row">
    <p class="text-danger fs-6">Jika misi lebih dari 1 pisahkan dengan tanda koma!</p>
</div>
<div class="row">
    <div class="col-md-7">
        <textarea name="" id="" cols="50" rows="4" class="form-control">{{ implode(", ", $misi) }}</textarea>
    </div>
</div>  
<div class="row mt-4 mb-3">
    <div class="col-md-5">
        <button class="btn btn-primary">Edit Visi Misi</button>
    </div>
</div>

@endsection
