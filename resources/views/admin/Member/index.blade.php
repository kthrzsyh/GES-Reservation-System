@extends('admin.base')
@section('content')

<div>
    <h3>List Member</h3>
    <a href="/admin/member/add" class="btn btn-primary mb-2">Tambah Member</a>
    <table class="table table-striped" id="table-user">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIK</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Nomor Handphone</th>
                <th>jenis kelamin</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($member as $memberAja)
            <tr>
                <td>{{$memberAja->nama}}</td>
                <td>{{$memberAja->nik}}</td>
                <td>{{$memberAja->tgl_lahir}}</td>
                <td>{{$memberAja->alamat}}</td>
                <td>{{$memberAja->user->hp}}</td>
                <td>{{$memberAja->jenis_kelamin == 0?'laki-laki' : 'perempuan'}}</td>
                <td>
                    <a class="btn btn-success btn-sm" href="https://wa.me/{{$memberAja->user->hp}}"><i class="mdi mdi-whatsapp"></i></a>
                    <a class="btn btn-primary btn-sm" href="/admin/member/detail/{{$memberAja->id}}" id="DetailData" data-id='{{$memberAja->id}}'><i class="mdi mdi-eye"></i></a>
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
        $('#table-user').DataTable();
    });
</script>
@endsection