<section id="kegiatan-desa">
    <div class="container">
        <h4 class="text-center fw-bold mb-3">Kegiatan Desa Batursari</h4>
        <div class="slideshow-kegiatan mb-3">
            
            @isset($kegiatan)
                @foreach ($kegiatan as $data)
                <div class="slide-kegiatan faded">
                    <img src="{{ asset('kegiatan-desa/' . $data->img_kegiatan) }}" alt="" width="100%" height="400vh">
                    <div class="text-kegiatan-desa" style="background: black">{{ $data->nama_kegiatan }}</div>
                </div> 
                @endforeach
            @endisset

            <a class="prev-kegiatan" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next-kegiatan" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
</section>

