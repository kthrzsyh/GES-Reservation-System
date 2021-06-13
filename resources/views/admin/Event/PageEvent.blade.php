@extends('admin.base')
@section('content')

<a href="/admin/event/add" class="btn btn-primary mb-1">Tambah Event</a>
<table id="table-event" class="table table-striped" style="text-align: center;">
    <tr>
        <th>Nama Event</th>
        <th>Deskripsi</th>
        <th>Tanggal</th>
        <th>Kuota</th>
        <th>Expired</th>
        <th>Jam Mulai</th>
        <th>Jam Selesai</th>
        <th>Hari</th>
        <th style="width: 120px;">Action</th>
    </tr>
    @foreach($event as $eventAja)
    <tr>
        <td>{{$eventAja->nama}}</td>
        <td>{{$eventAja->deskripsi}}</td>
        <td>{{$eventAja->tanggal}}</td>
        <td>{{$eventAja->kuota}}</td>
        <td>{{$eventAja->expired}}</td>
        <td>{{$eventAja->jam_mulai}}</td>
        <td>{{$eventAja->jam_selesai}}</td>
        <td>{{$eventAja->hari}}</td>
        <td>
            <a class="btn btn-danger btn-sm" id="HapusData" data-id='{{$eventAja->id}}'><i class="mdi mdi-delete" style="color: white;"></i></a>
            <a class="btn btn-primary btn-sm" href="/admin/event/edit/{{$eventAja->id}}" id="DetailData" data-id='{{$eventAja->id}}'><i class="mdi mdi-pencil" style="color: white;"></i></a>
            <a class="btn btn-success btn-sm" href="/admin/event/detail/{{$eventAja->id}}"><i class="mdi mdi-eye" style="color: white;"></i></a>
        </td>
    </tr>
    @endforeach
</table>


@endsection

@section('js')
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" type="text/javascript"></script> -->
<!-- <script>
    $(document).ready(function() {
        $('.btn-hapus').on("click", function() {
            console.log('test');

            let id = this.dataset.id;
            var isconfirm = confirm('Yakin Hapus Data?');
            if (isconfirm) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "DELETE",
                    url: "/admin/event/delete/" + id,
                    data: {
                        '_token': '{{csrf_token()}}'
                    },
                    success: function(result) {
                        console.log("Sukses Menghapus!")
                        alert("Hapus Berhasil!");
                        window.location.reload();
                    },
                    error: function(e) {
                        console.log("Error" + e)
                    }
                });
            }


            // alert("Hapus Berhasil dengan ID!" + id);
        })
    });
</script> -->
<script>
    $(document).ready(function() {
        $('#table-event').DataTable();
    });
</script>
@endsection