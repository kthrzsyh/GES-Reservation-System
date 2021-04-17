@extends('admin.base')
@section('content')

<div>
    <h3>List Kursi</h3>
    <a href="/admin/kursi/add" class="btn btn-primary mb-2">Tambah Kursi</a>
    <table border="1" class="display" id="table-kursi">
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
                    <a class="btn btn-primary" href="/admin/kursi/edit/{{$kursiAja->id}}" id="id">
                        Edit
                    </a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#table-kursi').DataTable();
    });
</script>
@endsection