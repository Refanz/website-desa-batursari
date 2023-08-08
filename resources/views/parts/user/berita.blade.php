<section id="berita-desa" class="mt-3 mb-3">
    <div class="container">
        <h4 class="text-center fw-bold mt-5">Berita Terkini</h4>
        <p class="text-center text-berita-1">Berikut ini adalah berita terkini tentang Desa Batursari</p>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @if(isset($beritaDesa))
                @for($i = 0; $i < $beritaDesa->count(); $i++)
                    @break($i > 5)
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('berita-desa/' . $beritaDesa[$i]->img_berita) }}" class="card-img-top" alt="..." width="300vw">
                            <div class="card-body">
                                <h5 class="card-title">{{ $beritaDesa[$i]->judul }}</h5>
                                <p class="card-text"><small>{{ $beritaDesa[$i]->created_at }}</small>, <i class="bi bi-person-fill"></i> Admin</p>
                                <p class="card-text">{{ $beritaDesa[$i]->excerpt }}</p>
                                <p class="card-link mb-0"><a href="{{ route('detailBerita', $beritaDesa[$i]->slug) }}">Read more <i class="bi bi-arrow-right"></i></a></p>
                            </div>
                        </div>
                    </div>
                @endfor
            @else
                <p></p>
            @endif
        </div>

        <div class="col-12 text-center">
            <a class="btn btn-outline-primary mt-3" type="button" href="/berita-desa">Selengkapnya</a>
        </div>
    </div>
</section>

