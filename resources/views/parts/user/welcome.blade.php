<section id="about-desa" class="about-section-padding mt-2 mb-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 mt-2 text-center">
                <div class="about-img">
                    <img src="{{ asset('assets/images/logo_kabupaten_pekalongan_2.png') }}" alt="" class="img-fluid" id="img-about">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-3 mt-lg-5 mt-4">
                <div class="about-text">
                    <p class="fs-4 fw-bold">Desa Batursari <br> Kecamatan Talun <br> Kabupaten Pekalongan</p>
                    @isset($profilDesa)
                        {!! $profilDesa->deskripsi !!}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>

