<nav class="navbar navbar-expand-lg bg-light p-1 fixed-top navbar-desa">
    <div class="container">
        <a class="navbar-brand d-flex" href="/">
            <img src="{{ asset('assets/images/logo_kabupaten_pekalongan.png') }}" alt="Kabupaten Pekalongan" width="40" height="45" class="d-inline-block align-text-top">
            <p class="mt-2 ms-2 fs-5">Desa Batursari</p>
        </a>
        <button class="btn btn-white btn-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Request::is('profil-desa') ? 'active' : '' }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Profil Desa</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item {{ Request::is('profil-desa') ? 'active' : '' }}" href="{{ route("profilDesa") }}">Profil Desa</a></li>
                        <li><a class="dropdown-item {{ Request::is('profil-desa/sejarah-desa') ? 'active' : '' }}" href="{{ route("sejarahDesa") }}">Sejarah Desa</a></li>
                        <li><a class="dropdown-item {{ Request::is('profil-desa/visi-misi') ? 'active' : '' }}" href="{{ route("visiMisiDesa") }}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item {{ Request::is('profil-desa/struktur-organisasi') ? 'active' : '' }}" href="{{ route("strukturOrganisasi") }}">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item {{ Request::is('profil-desa/profil-kepala-desa') ? 'active' : '' }}" href="{{ route("profilKepalaDesa") }}">Profil Kepala Desa</a></li>
                        <li><a class="dropdown-item {{ Request::is('profil-desa/profil-perangkat-desa') ? 'active' : '' }}" href="{{ route("profilPerangkatDesa") }}">Profil Perangkat Desa</a></li>
                        <li><a class="dropdown-item {{ Request::is('profil-desa/peta-desa') ? 'active' : '' }}" href="{{ route("petaDesa") }}">Peta Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('berita-desa') ? 'active' : '' }}" href="/berita-desa">Berita Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('galeri') ? 'active' : '' }}" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kegiatan-desa') ? 'active' : '' }}" href="/kegiatan-desa">Kegiatan Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('kontak') ? 'active' : '' }}" href="/kontak">Kontak</a>
                </li>
                <a class="btn btn-outline-primary" type="button" href="/login">Login</a>
            </ul>
        </div>
    </div>
</nav>

