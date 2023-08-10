@extends('layouts.app')

@section('meta-description', 'Kontak Desa Batursari')

@section('meta-keywords', 'Kontak, Batursari, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Batursari | Kontak')

@section('content')

<h4 class="fw-bold">LOKASI</h4>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4652.395467901467!2d109.7367853668046!3d-7.017885225233185!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e701813b10fc7b9%3A0xa1f8014340914b6a!2sBalai%20Desa%20Batursari%20Talun!5e0!3m2!1sid!2sid!4v1690776736607!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

<div class="kontak-desa mt-3">
    <h4 class="fw-bold mt-2">KONTAK</h4>
    <div class="row">
        <div class="col-md-6 mb-3">
            <div class="row">
                <div class="col-md-12">
                    <h5>Alamat</h5>
                    <div class="d-flex">
                        <i class="bi bi-geo-alt" style="font-size: 30px"></i>
                        <p class="ms-2" style="font-size: 14px">Jelun, Batursari, Kecamatan Talun, Kabupaten Pekalongan, Jawa Tengah 51192.</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>Telepon</h5>
                    <div class="d-flex">
                        <i class="bi bi-telephone p-1" style="font-size: 30px"></i>
                        <p class="ms-2 mt-3" style="font-size: 14px">08xxxxxxxxx</p>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md-12">
                    <h5>Email</h5>
                    <div class="d-flex">
                        <i class="bi bi-envelope p-1" style="font-size: 30px"></i>
                        <p class="ms-2 mt-3" style="font-size: 14px">batursari-talun@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <form action="#" method="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="input-nama" class="form-label">Nama</label>
                            <input name="input-nama" type="text" class="form-control" id="input-nama" required autocomplete="off" placeholder="Nama Lengkap">
                        </div>
                        <div class="mb-3">
                            <label for="input-email" class="form-label">Email</label>
                            <input name="input-email" type="email" class="form-control" id="input-email" required autocomplete="off" placeholder="name@example.com">
                        </div>
                        <div class="mb-3">
                            <label for="input-subjek" class="form-label">Subjek</label>
                            <input name="input-subjek" type="text" class="form-control" id="input-subjek" required autocomplete="off" placeholder="Subjek">
                        </div>
                        <div class="mb-3">
                            <label for="input-pesan" class="form-label">Pesan</label>
                            <textarea name="input-pesan" id="input-pesan" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-25" name="btn-kirim-kontak">Kirim</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection
