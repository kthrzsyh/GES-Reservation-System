@extends('admin.base')
@section('content')
<table id="" class="table table-striped" style="text-align: center;">
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
@section('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#table-event').DataTable();
    });
</script>
@endsection