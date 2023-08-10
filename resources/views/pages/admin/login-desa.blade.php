<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Desa Batursari | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="{{ asset('logo_kabupaten_pekalongan.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
</head>
<body>
    <div class="container p-5">
        <form action="{{ route('auth') }}" method="POST" class="mt-4">
            @csrf
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card login-group">
                        <div class="card-header">
                            <h6 class="text-center fw-bold">LOGIN ADMIN</h6>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <img src="{{ asset('assets/images/logo_kabupaten_pekalongan.png') }}" style="width: 100px">
                            </div>
                            @isset($login_error)
                            <div class="alert alert-danger alert-dismissible fade show mt-2 text-center" role="alert">
                                Username/password salah!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endisset
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="name" class="form-label">Username</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="row mt-3 justify-content-center">
                                <div class="col-md-5">
                                    <button class="btn btn-primary" type="submit" style="width: 100%">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>

