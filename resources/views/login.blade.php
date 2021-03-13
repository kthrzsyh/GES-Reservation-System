@extends('base')
@section('content')


<div class="d-flex justify-content-center">
    <div class="border p-3" style="width: 50%;">
        <form action="" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="email">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="email" name="email">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="password">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="password" name="password">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>

    </div>

</div>
@endsection