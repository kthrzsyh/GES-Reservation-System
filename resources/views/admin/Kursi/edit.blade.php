@extends('admin.base')
@section('content')
<div class="d-flex justify-content-center">
    <div class="border p-3" style="width: 50%;">
        <form method="POST" action="/admin/kursi/update">
            @csrf
            <div class="mb-3 row">
                <input type="hidden" name="id" value="{{$kursi->id}}">
                <label for="code" class="col-sm-2 col-form-label">Code</label>
                <div class="col-sm-10">
                    <select name="code" id="code" disabled>
                        @foreach($range as $value)
                        <option value="{{$value}}" {{$value == $kursi->code ? 'selected' : ''}}>{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                <label for="code" class="col-sm-2 col-form-label">Nomor Kursi</label>
                <div class="col-sm-10">
                    <input type="number" name="no_kursi" value="{{$kursi->no_kursi}}" disabled>
                </div>
                <label for="is_active" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                    <select name="is_active" id="is_active">
                        <option value="1" {{$value == $kursi->is_active ? 'selected':''}}>Aktif</option>
                        <option value="0" {{$value == $kursi->is_active ? 'selected':''}}>Tidak Aktif</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</div>
@endsection