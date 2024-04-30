@extends

@section('konten')
    <div class="w-50 center border rounded px-3 py-3 mx-auto">
        <h1>Login</h1>
        <form action= "/siswa/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">EMAIL</label>
                <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">PASSWORD</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="mb-3">
                <button name="submit" type="submit" class="btn btn-primary">LOGIN</button>
            </div>
    </div>
@endsection