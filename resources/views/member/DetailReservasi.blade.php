@extends('member.base')
@section('content')
<div>
    <table border="1" class="display" id="table-user">
        <h1>{{$event[0]->event->nama}}</h1>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Jemaat</th>
                <th>Booking Code</th>
                <th>Nomor Kursi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($event as $eventA)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$eventA->nama}}</td>
                <td>{{$eventA->kode_booking}}</td>
                <td>{{$eventA->chair->code->code}}{{$eventA->chair->no_kursi}}</td>
            </tr>
            @endforeach
        </tbody>

    </table>
</div>
@endsection