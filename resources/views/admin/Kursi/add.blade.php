@extends('admin.base')
@section('content')
@if(Session::has('pesan'))
<div class="alert alert-danger" role="alert">
    Kursi sudah terdaftar!
</div>
@endif
<div class="container form_pendaftaran">
    <div class="title">Form Tambah Kursi</div>
    <div class="p-3" style="border: 1px solid grey; border-radius: 10px">
        <form method="POST" action="/admin/kursi/insert">
            @csrf
            <div class="form-group">
                <label for="code" class="jarak_bawah">Code</label>
                <select name="code" id="code" class="form-control">
                    @foreach($range as $value)
                    <option value="{{$value->id}}">{{$value->code}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="code" class="jarak_bawah">Nomor Kursi</label>
                        <input type="number" name="no_kursi" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="is_active" class="jarak_bawah">Status</label>
                    <select name="is_active" id="is_active" class="form-control">
                        <option value="1">Aktif</option>
                        <option value="0">Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</div>
@endsection