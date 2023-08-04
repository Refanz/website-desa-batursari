@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Visi Misi</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
</ol>

<form action="{{ route('editVisiMisi') }}" method="POST">
    @csrf
    {{-- @isset($error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Edit data visi dan misi mengalami kegagalan!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endisset --}}
    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Edit data visi dan misi berhasil!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="row">
        <div class="col-md-2">
            <h5>Visi</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <textarea name="visi-desa" id="" cols="70" rows="4" class="form-control" required>@isset($data->visi) {{ $data->visi }}@endisset</textarea>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-2">
            <h5>Misi</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="callout callout-info">
                <h4>Info Misi</h4>
                Jika misi lebih dari 1 pisahkan dengan tanda koma!
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <textarea name="misi-desa" id="" cols="50" rows="4" class="form-control" required>@isset($misi) {{ implode(", ", $misi) }} @endisset</textarea>
        </div>
    </div>
    <div class="row mt-4 mb-3">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Edit Visi Misi</button>
        </div>
    </div>
</form>

@endsection

