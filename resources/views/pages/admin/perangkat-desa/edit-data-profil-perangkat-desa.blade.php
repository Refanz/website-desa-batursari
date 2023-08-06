@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Edit Data Profil Perangkat Desa</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('tambahProfilPerangkatDesaAdmin') }}">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('profilPerangkatDesaAdmin') }}">Profil Perangkat Desa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit Data Profil Perangkat Desa</li>
</ol>

<form action="{{ route('editProfilPerangkatDesaAdmin', $dataProfilPerangkatDesa->id) }}" method="POST" class="my-3" enctype="multipart/form-data">
    @csrf

    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Edit data profil perangkat desa berhasil!
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
        <div class="col-md-6">
            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" id="nama_lengkap" class="form-control" value="@isset($dataProfilPerangkatDesa) {{ $dataProfilPerangkatDesa->nama }}@endisset">
        </div>
        <div class="col-md-6 mt-3 mt-md-0">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                <option value="">- Pilih jenis kelamin -</option>
                <option value="Laki - Laki" @isset($dataProfilPerangkatDesa) @if($dataProfilPerangkatDesa->jenis_kelamin == 'Laki - Laki') {{ "selected" }} @endif @endisset>Laki - Laki</option>
                <option value="Perempuan" @isset($dataProfilPerangkatDesa) @if($dataProfilPerangkatDesa->jenis_kelamin == 'Perempuan') {{ "selected" }} @endif @endisset>Perempuan</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="@isset($ttl) {{ $ttl[0] }} @endisset">
        </div>

        <div class="col-md-4 mt-3 mt-md-0">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="@isset($ttl){{ date("Y-m-d", strtotime($ttl[1])) }}@endisset">
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="">- Pilih Status -</option>
                <option value="Menikah" @isset($dataProfilPerangkatDesa) @if($dataProfilPerangkatDesa->status == 'Menikah') {{ "selected" }} @endif @endisset>Menikah</option>
                <option value="Belum Menikah" @isset($dataProfilPerangkatDesa) @if($dataProfilPerangkatDesa->status == 'Belum Menikah') {{ "selected" }} @endif @endisset>Belum Menikah</option>
                <option value="Duda" @isset($dataProfilPerangkatDesa) @if($dataProfilPerangkatDesa->status == 'Duda') {{ "selected" }} @endif @endisset>Duda</option>
                <option value="Janda" @isset($dataProfilPerangkatDesa) @if($dataProfilPerangkatDesa->status == 'Janda') {{ "selected" }} @endif @endisset>Janda</option>
            </select>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <label for="no_telepon" class="form-label">No Telepon</label>
            <input type="text" id="no_telepon" class="form-control" name="no_telepon" value="@isset($dataProfilPerangkatDesa) {{ $dataProfilPerangkatDesa->no_telp }}@endisset">
        </div>
        <div class="col-md-4">
            <label for="nama_pasangan" class="form-label mt-3 mt-md-0">Nama Suami/Istri</label>
            <input type="text" class="form-control" id="nama_pasangan" name="nama_pasangan" value="@isset($dataProfilPerangkatDesa) {{ $dataProfilPerangkatDesa->nama_pasangan }}@endisset">
        </div>
        <div class="col-md-4">
            <label for="jumlah_anak" class="form-label mt-3 mt-md-0">Jumlah Anak</label>
            <input type="number" class="form-control" id="jumlah_anak" name="jumlah_anak" value=@isset($dataProfilPerangkatDesa) {{$dataProfilPerangkatDesa->jumlah_anak }}@endisset>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-4">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" id="jabatan" class="form-control" name="jabatan" value="@isset($dataProfilPerangkatDesa) {{$dataProfilPerangkatDesa->jabatan }}@endisset">
        </div>
        <div class="col-md-4">
            <label for="no_sk" class="form-label mt-3 mt-md-0">No SK</label>
            <input type="text" id="no_sk" class="form-control" name="no_sk" value="@isset($dataProfilPerangkatDesa) {{$dataProfilPerangkatDesa->no_sk }}@endisset">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="callout callout-info">
                <h4>Info Mengisi Informasi Pendidikan</h4>
                Jika memasukkan lebih dari 1 riwayat pendidikan <br>
                pisahkan dengan tanda koma!
            </div>

            <label for="pendidikan_formal" class="form-label">Pendidikan Formal</label>
            <textarea name="pendidikan_formal" id="pendidikan_formal" rows="7" class="form-control">@isset($dataProfilPerangkatDesa) {{$dataProfilPerangkatDesa->pendidikan_formal }}@endisset</textarea>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" rows="7" class="form-control">@isset($dataProfilPerangkatDesa) {{$dataProfilPerangkatDesa->alamat }}@endisset</textarea>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="callout callout-info">
                <h4>Info Foto Perangkat Desa</h4>
                Gambar yang tampil di bawah ini adalah foto <br>
                yang akan ditampilkan di halaman profil perangkat desa!
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            @isset($dataProfilPerangkatDesa)
            <img src="{{ asset('img-profil-perangkat-desa/' . $dataProfilPerangkatDesa->img_perangkat_desa) }}" alt="" width="100%">
            @endisset
            <label for="img-input" class="form-label mt-3">Unggah Foto Perangkat Desa</label>
            <input type="file" name="img_perangkat_desa" id="img-input" class="form-control" value="@isset($dataProfilPerangkatDesa) {{$dataProfilPerangkatDesa->img_perangkat_desa }}@endisset">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-3">
            <img src="#" alt="" id="img-preview" width="100%">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Edit Profil Perangkat Desa</button>
        </div>
    </div>
</form>

@endsection

