@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Dashboard</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item active">Dashboard</li>
</ol>
<h5 class="mb-3">Data Kependudukan Tahun @isset($dataPenduduk) {{ $dataPenduduk->tahun }} @endisset</h5>
<div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body"><i class="bi bi-gender-male" style="font-size: 45px"></i><br> Jumlah Jiwa Desa Batursari</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <p class="text-white">@if(isset($dataPenduduk)) {{ $dataPenduduk->jumlah_penduduk }} @else 0  @endif Jiwa</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body"><i class="bi bi-gender-male" style="font-size: 45px"></i><br> Jiwa Laki - Laki </div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <p class="text-white">@if(isset($dataPenduduk)) {{ $dataPenduduk->jumlah_laki_laki }} @else 0  @endif Jiwa</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body"><i class="bi bi-gender-female" style="font-size: 45px"></i><br> Jiwa Perempuan</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <p class="text-white">@if(isset($dataPenduduk)) {{ $dataPenduduk->jumlah_perempuan }} @else 0  @endif Jiwa</p>
            </div>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-area me-1"></i>
                Area Chart Example
            </div>
            <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                Bar Chart Example
            </div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
    </div>
</div> --}}

@endsection

