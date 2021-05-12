@extends('admin.base')
@section('content')
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kode Booking</th>
        <th>Nomor Kursi</th>
    </tr>
    @foreach($data->reservasi as $value)
    <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$value->nama}}</td>
        <td>{{$value->kode_booking}}</td>
        <td>{{$value->chair->code->code}}{{$value->chair->no_kursi}}</td>
    </tr>
    @endforeach
</table>
@endsection