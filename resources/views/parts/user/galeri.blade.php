<section id="galeri-desa" class="mt-3 mb-4">
    <div class="container p-4">
        <h4 class="text-center fw-bold mt-5 mb-3 text-white">Galeri Desa Batursari</h4>
        <div class="row row-cols-1 row-cols-md-3 g-4 pb-5">
            @for($i = 0; $i < 3; $i++) <div class="col">
                <div class="card">
                    <img src="{{ asset('assets/images/sungai.jpg') }}" width="300px" height="300px" class="card-img-top img-galeri rounded" alt="...">
                </div>
        </div>
        @endfor
    </div>
    </div>
</section>

