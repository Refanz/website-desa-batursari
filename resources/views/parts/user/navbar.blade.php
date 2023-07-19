<nav class="navbar navbar-expand-lg bg-light p-2 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/images/logo_kabupaten_pekalongan.png') }}" alt="Kabupaten Pekalongan" width="40" height="45" class="d-inline-block align-text-top">
            <div class="d-inline">Desa Batursari</div>
        </a>
        <button class="btn btn-white btn-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link @if($title == 'home') active @endif" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title == 'profile-desa') active @endif" href="/profile-desa">Profile Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title == 'berita-desa') active @endif" href="/berita-desa">Berita Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title == 'galeri') active @endif" href="/galeri">Galeri</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if($title == 'kontak') active @endif" href="/kontak">Kontak</a>
                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li> --}}
                <a class="btn btn-outline-primary" type="button" href="/login">Login</a>
            </ul>
        </div>
    </div>
</nav>

