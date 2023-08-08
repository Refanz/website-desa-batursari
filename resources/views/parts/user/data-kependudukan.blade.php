<section id="berita-desa" class="mt-3 mb-5">
    <div class="container">
        <h4 class="text-center fw-bold mt-5">Data Kependudukan Desa Batursari</h4>
        <div class="row text-center mt-4 mt-md-5" >
            <div class="col-md-4 mt-3 mt-md-0">
                <img src="{{ asset('assets/images/penduduk.png') }}" alt="">
                <h5 class="mt-2">Total Penduduk @if(isset($dataPenduduk)) {{ $dataPenduduk->jumlah_penduduk }} @else 0 @endif Jiwa</h5>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <img src="{{ asset('assets/images/laki-laki.png') }}" alt="">
                <h5 class="mt-2">Total Laki Laki @if(isset($dataPenduduk)) {{ $dataPenduduk->jumlah_laki_laki }} @else 0 @endif Jiwa</h5>
            </div>
            <div class="col-md-4 mt-3 mt-md-0">
                <img src="{{ asset('assets/images/perempuan.png') }}" alt="">
                <h5 class="mt-2">Total Perempuan @if(isset($dataPenduduk)) {{ $dataPenduduk->jumlah_perempuan }} @else 0 @endif Jiwa</h5>
            </div>
        </div>
    </div>
</section>

