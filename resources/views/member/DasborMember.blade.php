@extends('member.base')
@section('content')
<div><a href="/member/editmember/{{$user->id}}" class="btn btn-primary">Edit</a></div>
<br>
<div class="col" style="width: 100%;">
    <table class="table">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{$user->member->nama}}</td>
        </tr>
        <tr>
            <td>NIK</td>
            <td>:</td>
            <td>{{$user->member->nik}}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{$user->member->tgl_lahir}}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{$user->member->alamat}}</td>
        </tr>
        <tr>
            <td>No. Handphone</td>
            <td>:</td>
            <td>{{$user->hp}}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{$user->member->jenis_kelamin == 0?'perempuan' : 'laki-laki'}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>{{$user->email}}</td>
        </tr>
    </table>
</div>
<br>


@endsection