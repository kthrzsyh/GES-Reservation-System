@extends('base')
@section('content')
<div class="body_login">
    <div class="center">
        <div class="row">
            <img src=" {{asset('/img/logo_ges.png')}}" alt="">
            <p>Silahkan Login</p>
        </div>

        <form action="" method="POST">
            @csrf
            <div class="txt_field">
                <input type="email" id="email" name="email" required>
                <span></span>
                <label for="email">Email</label>
            </div>
            <div class="txt_field">
                <input type="password" id="password" name="password" required>
                <span></span>
                <label for="password">Password</label>
            </div>
            <button type="submit">Login</button>
            <div>
                <p>Belum Punya Akun? Silahkan <a href="/pendaftaran" type="submit"> Daftar </a> Disini</p>
            </div>
        </form>
    </div>
</div>
@endsection