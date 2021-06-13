@extends('admin.base')
@section('content')
<div class="container form-pendaftaran">
    <div class="p-3" style="border: 1px solid grey; border-radius: 10px">
        <form method="POST" action="/admin/kursi/update">
            @csrf
            <input type="hidden" name="id" value="{{$kursi->id}}">

            <div class="form-group">
                <label for="code" class="jarak_bawah">Code</label>
                <select name="code" id="code" class="form-control" disabled>
                    @foreach($range as $value)
                    <option value="{{$value}}" {{$value == $kursi->code ? 'selected' : ''}}>{{$value}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-6">
                        <label for="code" class="jarak_bawah">Nomor Kursi</label>
                        <input class="form-control" type="number" name="no_kursi" value="{{$kursi->no_kursi}}" disabled>
                    </div>
                    <div class="col-sm-6">
                        <label for="is_active" class="jarak_bawah">Status</label>
                        <select name="is_active" id="is_active" class="form-control">
                            <option value="1" {{$value == $kursi->is_active ? 'selected':''}}>Aktif</option>
                            <option value="0" {{$value == $kursi->is_active ? 'selected':''}}>Tidak Aktif</option>
                        </select>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</div>
@endsection