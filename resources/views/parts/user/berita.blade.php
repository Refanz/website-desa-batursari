<section id="berita-desa" class="mt-3 mb-3">
    <div class="container">
        <h4 class="text-center fw-bold mt-5">Berita Terkini</h4>
        <p class="text-center text-berita-1">Berikut ini adalah berita terkini tentang Desa Batursari</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @for($i = 0; $i < 6; $i++) 
            <div class="col">
                <div class="card">
                    <img src="{{ asset('assets/images/gunung.jpg') }}" class="card-img-topg" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-link mb-0"><a href="#">Read more <i class="bi bi-arrow-right"></i></a></p>
                    </div>
                </div>
            </div>
            @endfor
        </div>

        <div class="col-12 text-center">
            <a class="btn btn-outline-primary mt-3" type="button" href="/berita-desa">Selengkapnya</a>
        </div>
    </div>
</section>

