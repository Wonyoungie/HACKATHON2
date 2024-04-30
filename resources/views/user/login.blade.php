<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card mx-auto m-5" style="width: 30rem;">
                    <div class="modal-header m-3">
                        <h5 class="modal-title">Masuk</h5>
                    </div>
                    <div class="tutupbtn position-absolute top-0 end-0 m-2">
                        <a href="{{ route('homepage') }}" class="btn btn-close" aria-label="Close"></a>
                    </div>
                    <div class="modal-body">
                        <form action="{{Route('#')}}" method="POST">
                            {{csrf_field()}}
                            <div class="mb-3 m-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="your@email.com" maxlength="255">
                            </div>
                            <div class="mb-3 m-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" maxlength="255">
                                <button type="button" class="btn btn-outline-secondary" onclick="togglePasswordVisibility()">Tampilkan</button>
                            </div>
                            <div class="mb-3 form-check m-3">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                                <label class="form-check-label" for="rememberMe">Ingat Saya</label>
                                <a href="/forgot-password" class="ms-3">Lupa Kata Sandi?</a>
                            </div>
                            <button type="submit" class="btn btn-primary m-3 col-sm-11">Masuk</button>
                        </form>
                    </div>
                    <div class="googlelogin mx-auto">
                        <a href="{{ route('social.redirect', ['google']) }}" class="btn btn-success btn-google">
                            <i class="fa fa-google"></i>
                            Google
                        </a>
                    </div>
                    <div class="modal-footer mx-auto">
                        <p class="mb-0">Belum punya akun? <a href="/register">Daftar</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
