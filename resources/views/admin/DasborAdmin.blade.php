@extends('admin.base')
@section('content')

<div>
    <table class="table table-striped" id="table-user">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Nomor Handphone</th>
                <th>jenis kelamin</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($member as $memberAja)
            <tr>
                <td>{{$memberAja->nama}}</td>
                <td>{{$memberAja->nik}}</td>
                <td>{{$memberAja->tgl_lahir}}</td>
                <td>{{$memberAja->alamat}}</td>
                <td>{{$memberAja->hp}}</td>
                <td>{{$memberAja->jenis_kelamin == 0?'laki-laki' : 'perempuan'}}</td>
                <td>
                    <a class="btn btn-danger btn-sm" id="HapusData" data-id='{{$memberAja->id}}'><i class="mdi mdi-delete" style="color: white;"></i></a>
                    <a class="btn btn-primary btn-sm" href="/admin/member/detail/{{$memberAja->id}}" id="DetailData" data-id='{{$memberAja->id}}'><i class="mdi mdi-eye" style="color: white;"></i></a>
                </td>

            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@endsection
@section('js')
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
<script>
    $(document).ready(function() {
        $('#table-user').DataTable();
    });
</script>
@endsection