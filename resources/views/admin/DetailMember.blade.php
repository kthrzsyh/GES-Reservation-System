@extends('admin.base')
@section('content')
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td>{{$member->nama}}</td>
    </tr>
    <tr>
        <td>NIK</td>
        <td>:</td>
        <td>{{$member->nik}}</td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>{{$member->tgl_lahir}}</td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>{{$member->alamat}}</td>
    </tr>
    <tr>
        <td>No. Handphone</td>
        <td>:</td>
        <td>{{$member->hp}}</td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td>{{$member->jenis_kelamin == 0?'perempuan' : 'laki-laki'}}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td>{{$member->user->email}}</td>
    </tr>


</table>
@endsection