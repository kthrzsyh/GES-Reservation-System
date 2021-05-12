@extends('base')
@section('content')
<div class="body_login">
    <div class="center">
        <h1>Login</h1>
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
        </form>
    </div>
</div>
@endsection