@extends('admin.base')
@section('content')
<table border="1" id="table-event" class="display" style="text-align: center;">
    <tr>
        <th>No</th>
        <th>Nama Event</th>
        <th>Tanggal Event</th>
        <th>Action</th>
    </tr>
    @foreach($data as $dataEvent)
    <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$dataEvent->nama}}</td>
        <td>{{$dataEvent->tanggal}}</td>
        <td><a href="/admin/event/EventReportDetail/{{$dataEvent->id}}" class="btn">Detail</a></td>
    </tr>
    @endforeach
</table>

@endsection