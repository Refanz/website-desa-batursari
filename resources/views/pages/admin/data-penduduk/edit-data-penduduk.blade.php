@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Edit Data Penduduk</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('dataPendudukAdmin') }}">Data Penduduk</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Data Penduduk</li>
</ol>

<form action="{{ route('editDataPendudukAdmin', $dataPenduduk->id) }}" method="POST" class="my-3">
    @csrf

    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Edit data penduduk berhasil!
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
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="callout callout-info">
                <h4>Info Mengisi Data Penduduk</h4>
                Jumlah penduduk yang dimasukkan adalah per tahun
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control" maxlength="4" minlength="4" value="{{ $dataPenduduk->tahun }}" required>
        </div>
        <div class="col-md-6">
            <label for="jumlah_penduduk" class="form-label">Jumlah Penduduk</label>
            <input type="number" name="jumlah_penduduk" id="jumlah_penduduk" class="form-control" value={{ $dataPenduduk->jumlah_penduduk }} required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="jumlah_perempuan" class="form-label">Jumlah Jiwa Perempuan</label>
            <input type="number" name="jumlah_perempuan" id="jumlah_perempuan" class="form-control" value={{ $dataPenduduk->jumlah_perempuan }} required>
        </div>
        <div class="col-md-6">
            <label for="jumlah_laki_laki" class="form-label">Jumlah Jiwa Laki - Laki</label>
            <input type="number" name="jumlah_laki_laki" id="jumlah_laki_laki" class="form-control" value={{ $dataPenduduk->jumlah_perempuan }} required>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Edit Data Penduduk</button>
        </div>
    </div>
</form>

@endsection

