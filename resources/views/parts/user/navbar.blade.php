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
                    <a class="nav-link @if($title == 'home') active @endif" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle @if($title == 'profil-desa') active @endif" role="button" data-bs-toggle="dropdown" aria-expanded="false" href="#">Profile Desa</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item @if($title2 == 'profil-desa') active @endif" href="{{ route("profilDesa") }}">Profile Desa</a></li>
                        <li><a class="dropdown-item @if($title2 == 'sejarah-desa') active @endif" href="{{ route("sejarahDesa") }}">Sejarah Desa</a></li>
                        <li><a class="dropdown-item @if($title2 == 'visi-misi-desa') active @endif" href="{{ route("visiMisiDesa") }}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item @if($title2 == 'struktur-organisasi') active @endif" href="{{ route("strukturOrganisasi") }}">Struktur Organisasi</a></li>
                        <li><a class="dropdown-item @if($title2 == 'profil-kepala-desa') active @endif" href="{{ route("profilKepalaDesa") }}">Profil Kepala Desa</a></li>
                        <li><a class="dropdown-item @if($title2 == 'profil-perangkat-desa') active @endif" href="{{ route("profilPerangkatDesa") }}">Profil Perangkat Desa</a></li>
                        <li><a class="dropdown-item @if($title2 == 'peta-desa') active @endif" href="{{ route("petaDesa") }}">Peta Desa</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title == 'berita-desa') active @endif" href="/berita-desa">Berita Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title == 'galeri') active @endif" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title == 'kegiatan-desa') active @endif" href="/kegiatan-desa">Kegiatan Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title == 'kontak') active @endif" href="/kontak">Kontak</a>
                </li>
                <a class="btn btn-outline-primary" type="button" href="/login">Login</a>
            </ul>
        </div>
    </div>
</nav>

