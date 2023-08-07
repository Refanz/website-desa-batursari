<section id="galeri-desa" class="mt-3 mb-4">
    <div class="container p-4">
        <h4 class="text-center fw-bold mt-5 mb-3 text-white">Galeri Desa Batursari</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4 pb-5 row-galeri">

            @if($galeri != null)

            @foreach ($galeri as $data)
            <div class="col col-galeri">
                <div class="card">
                    <img src="{{ asset('galeri-desa/' . $data->img_galeri_desa) }}" width="300px" height="300px" class="card-img-top img-galeri rounded" alt="...">
                </div>
            </div>
            @endforeach

            <a class="prev-galeri" onclick="prevImage()">&#10094;</a>
            <a class="next-galeri" onclick="nextImage()">&#10095;</a>

            @else

            <div style="width: 100%; margin-top: 100px">
                <p class="text-center text-white">Coming Soon</p>
            </div>

            @endif

        </div>
    </div>
</section>

