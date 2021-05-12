@extends('member.base')
@section('content')
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
            <td>
                <h3>Alamat</h3>
            </td>
        </tr>
        <tr>
            <td style="text-align:right">RT/RW</td>
            <td>:</td>
            <td>{{$user->member->rt_rw}}</td>
        </tr>
        <tr>
            <td style="text-align:right">Jalan</td>
            <td>:</td>
            <td>{{$user->member->jalan}}</td>
        </tr>
        <tr>
            <td style="text-align:right">Kelurahan</td>
            <td>:</td>
            <td>{{$user->member->kel}}</td>
        </tr>
        <tr>
            <td style="text-align:right">Kecamatan</td>
            <td>:</td>
            <td>{{$user->member->kec}}</td>
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
        <tr>
            <td>Status</td>
            <td>:</td>
            <td>{{$user->member->status == 1?'Belum Ber-KTA' : 'Sudah Ber-KTA'}}</td>
        </tr>
    </table>

    <div>
        <a href="/member/edit/{{$user->id}}" class="btn btn-primary">Edit</a>
    </div>
</div>
<br>


@endsection