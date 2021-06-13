@extends('admin.base')
@section('content')
<h3>Event Report</h3>
<table id="tb-event-report" class="table table-striped" style="text-align: center;">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Event</th>
            <th>Tanggal Event</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $dataEvent)
        <tr>
            <td>{{$loop->index+1}}</td>
            <td>{{$dataEvent->nama}}</td>
            <td>{{$dataEvent->tanggal}}</td>
            <td><a href="/admin/event/EventReportDetail/{{$dataEvent->id}}" class="btn btn-success btn-sm" style="color: white;"><i class="mdi mdi-eye"></i></a></td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
@section('js')

<script>
    $(document).ready(function() {
        $('#tb-event-report').DataTable();
    });
</script>
@endsection