<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Dashboard</div>
                    <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <div class="sb-nav-link-icon"><i class="bi bi-speedometer"></i></div>
                        Dashboard
                    </a>
                    <div class="sb-sidenav-menu-heading">Profil Desa</div>
                    <a class="nav-link collapsed {{ Request::is('dashboard/profil-desa') ? 'active' : '' }}" href="#" data-bs-toggle="collapse" data-bs-target="#collapseProfilDesa" aria-expanded="false" aria-controls="collapseProfilDesa">
                        <div class="sb-nav-link-icon"><i class="bi bi-house"></i></i></div>
                        Profil Desa
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseProfilDesa" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link {{ Request::is('dashboard/profil-desa') ? 'active' : '' }}" href="{{ route('profilDesaAdmin') }}">Profil Desa</a>
                            <a class="nav-link {{ Request::is('dashboard/sejarah-desa') ? 'active' : '' }}" href="{{ route('sejarahDesaAdmin') }}">Sejarah Desa</a>
                            <a class="nav-link {{ Request::is('dashboard/visi-misi') ? 'active' : '' }}" href="{{ route('visiMisiAdmin') }}">Visi dan Misi</a>
                            <a class="nav-link {{ Request::is('dashboard/struktur-organisasi') ? 'active' : '' }}" href="{{ route('strukturOrganisasiAdmin') }}">Struktur Organisasi</a>
                            <a class="nav-link {{ Request::is('dashboard/profil-kepala-desa') ? 'active' : '' }}" href="{{ route('profilKepalaDesaAdmin') }}">Profil Kepala Desa</a>
                            <a class="nav-link {{ Request::is('dashboard/profil-perangkat-desa') ? 'active' : '' }}" href="{{ route('profilPerangkatDesaAdmin') }}">Profil Perangkat Desa</a>
                            <a class="nav-link {{ Request::is('dashboard/peta-desa') ? 'active' : '' }}" href="{{ route('petaDesaAdmin') }}">Peta Desa</a>
                        </nav>
                    </div>
                    <a class="nav-link {{ Request::is('dashboard/berita-desa') ? 'active' : '' }}" href="{{ route('beritaDesaAdmin') }}">
                        <div class="sb-nav-link-icon"><i class="bi bi-newspaper"></i></div>
                        Berita Desa
                    </a>
                    <a class="nav-link {{ Request::is('dashboard/kegiatan-desa') ? 'active' : '' }}" href="{{ route('kegiatanDesaAdmin') }}">
                        <div class="sb-nav-link-icon"><i class="bi bi-calendar"></i></div>
                        Kegiatan Desa
                    </a>
                    <a class="nav-link {{ Request::is('dashboard/galeri-desa') ? 'active' : '' }}" href="{{ route('galeriDesaAdmin') }}">
                        <div class="sb-nav-link-icon"><i class="bi bi-images"></i></div>
                        Galeri Desa
                    </a>
                    <a class="nav-link {{ Request::is('dashboard/data-penduduk') ? 'active' : '' }}"  href="{{ route('dataPendudukAdmin') }}">
                        <div class="sb-nav-link-icon"><i class="bi bi-person-vcard"></i></div>
                        Data Penduduk
                    </a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as:</div>
                {{ Auth::user()->name }}
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                @yield('content')
            </div>
        </main>

        @include('parts.admin.footer')
    </div>
</div>

