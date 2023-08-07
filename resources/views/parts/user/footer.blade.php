<section id="footer-desa" class="bg-dark p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-desa-info d-flex">
                    <img src="{{ asset('assets/images/logo_kabupaten_pekalongan.png') }}" width="33" alt="">
                    <h6 class="text-white ms-2 mt-3">DESA BATURSARI</h6>
                </div>
                <p class="text-white mt-2 footer-text">Website Desa Batursari, Kecamatan Talun, Kabupaten Pekalongan</p>
            </div>
            <div class="col-md-4">
                <div class="footer-desa-kontak d-flex">
                    <i class="bi bi-chat-left-text" style="font-size: 2rem; color: white;"></i>
                    <p class="text-white ms-2 mt-2">HUBUNGI KAMI</p>
                </div> 
                <p class="text-white footer-text">Jelun, Batursari, Kecamatan Talun, Kabupaten Pekalongan, Jawa Tengah 51192.</p>
                <p class="text-white footer-text">Telepon: 08xxxxxxx</p>
                <p class="text-white footer-text">Email: batursari-talun@gmail.com</p>
            </div>
            <div class="col-md-4">
                <div class="footer-desa-galeri d-flex">
                    <i class="bi bi-camera" style="font-size: 2.3rem; color: white;"></i>
                    <p class="text-white ms-2 mt-3">GALERI</p>
                </div>
                @isset($galeri)
                    @for($i = 0; $i < $galeri->count(); $i++)
                    @break($i > 2)
                        <img class="footer-galeri" src="{{ asset('galeri-desa/' . $galeri[$i]->img_galeri_desa) }}" width="110" alt="">
                    @endfor
                @endisset
            </div>
        </div>
        <hr class="text-white">
        <div class="row">
            <p class="footer-text text-white text-center">Copyright @ 2023 - Desa Batursari</p>
        </div>
    </div>
</section>

