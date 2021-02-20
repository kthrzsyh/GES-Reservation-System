@extends('admin.base')
@section('content')
<h1>Dasboard Admin</h1>

<div>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>NIK</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Nomor Handphone</th>
            <th>jenis kelamin</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach($member as $memberAja)
        <tr>
            <td>{{$memberAja->nama}}</td>
            <td>{{$memberAja->nik}}</td>
            <td>{{$memberAja->tgl_lahir}}</td>
            <td>{{$memberAja->alamat}}</td>
            <td>{{$memberAja->hp}}</td>
            <td>{{$memberAja->jenis_kelamin}}</td>
            <td><button class="btn" id="HapusData" data-id='{{$memberAja->id}}'>Hapus</button></td>
            <td><button id="DetailData" data-id='{{$memberAja->id}}'>Detail</button></td>

        </tr>
        @endforeach
    </table>

</div>
@endsection