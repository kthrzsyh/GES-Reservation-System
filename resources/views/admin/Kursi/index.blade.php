@extends('admin.base')
@section('content')

<div>
    <h3>List Kursi</h3>
    <a href="/admin/kursi/add" class="btn btn-primary mb-2">Tambah Kursi</a>
    <table class="table table-striped" id="table-kursi" style="text-align: center;">
        <thead>
            <tr>
                <th>No</th>
                <th>Code</th>
                <th>No Kursi</th>
                <th>Status</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kursi as $kursiAja)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$kursiAja->code->code}}</td>
                <td>{{$kursiAja->no_kursi}}</td>
                <td>{{$kursiAja->is_active == 1 ? 'Aktif' : 'Tidak Aktif'}}</td>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/kursi/edit/{{$kursiAja->id}}" id="id">
                        <i class="mdi mdi-pencil"></i>
                    </a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@endsection
@section('js')

<script>
    $(document).ready(function() {
        $('#table-kursi').DataTable();
    });
</script>
@endsection