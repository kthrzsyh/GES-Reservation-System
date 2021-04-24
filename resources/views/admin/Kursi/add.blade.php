@extends('admin.base')
@section('content')
@if(Session::has('pesan'))
<div class="alert alert-danger" role="alert">
    Kursi sudah terdaftar!
</div>
@endif
<div class="d-flex justify-content-center">
    <div class="border p-3" style="width: 50%;">
        <form method="POST" action="/admin/kursi/insert">
            @csrf
            <div class="mb-3 row">
                <label for="code" class="col-sm-2 col-form-label">Code</label>
                <div class="col-sm-10">
                    <select name="code" id="code">
                        @foreach($range as $value)
                        <option value="{{$value->id}}">{{$value->code}}</option>
                        @endforeach
                    </select>
                </div>
                <label for="code" class="col-sm-2 col-form-label">Nomor Kursi</label>
                <div class="col-sm-10">
                    <input type="number" name="no_kursi">
                </div>
                <label for="is_active" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="is_active" id="is_active">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>

</div>
@endsection