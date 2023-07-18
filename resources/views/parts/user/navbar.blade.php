<nav class="navbar navbar-expand-lg bg-light p-2">
    <div class="container">
        <a class="navbar-brand" href="#">
            <div class="row">
                <div class="col-2">
                    <img src="{{ asset('images/logo_kabupaten_pekalongan.png') }}" alt="Kabupaten Pekalongan" width="40" height="45" class="d-inline-block align-text-top">
                    Desa Batursari 
                </div>
            </div>
        </a>
        <button class="btn btn-white btn-navbar" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Profile Desa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita Desa</a>
                </li>
                <li class="nav-item dropdown">
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
                </li>
            </ul>
        </div>
    </div>
</nav>

