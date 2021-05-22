@extends('member.base')
@section('content')
<div>
    <table border="1" class="display" id="table-user">
        <h1>Event Saya</h1>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Event</th>
                <th>Tanggal Event</th>
                <th>Detail</th>
            </tr>
        </thead>
        <tbody>
            @foreach($event as $eventAja)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$eventAja->nama}}</td>
                <td>{{$eventAja->tgl_even}}</td>
                <td><a href="/member/reservasimember/{{$eventAja->id_even}}">Detail</a></td>
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
@endsection