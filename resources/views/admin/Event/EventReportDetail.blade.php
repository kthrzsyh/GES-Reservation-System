@extends('admin.base')
@section('content')
<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kode Booking</th>
        <th>Nomor Kursi</th>
        <th>Absensi</th>
    </tr>
    @foreach($data->reservasi as $value)
    <tr>
        <td>{{$loop->index+1}}</td>
        <td>{{$value->nama}}</td>
        <td>{{$value->kode_booking}}</td>
        <td>{{$value->chair->code->code}}{{$value->chair->no_kursi}}</td>
        <td><a href="#" data-id="{{$value->id}}" id="btn_absen" class="btn_absen">{{$value->absen ? 'sudah absen' : 'belum absen'}}</a></td>
    </tr>
    @endforeach
</table>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('.btn_absen').on('click', function(e) {
            e.preventDefault();
            let id = this.dataset.id;
            if (confirm('Lakukan Absensi?')) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/admin/event/absensi",
                    data: {
                        '_token': '{{csrf_token()}}',
                        id: id
                    },
                    success: function(result) {
                        console.log(result)
                        alert("Berhasil Absen!");
                        window.location.reload();
                    },
                    error: function(e) {
                        console.log("Error" + e);
                        alert("Gagal Absen!");
                    }
                });
            }
        })
    })
</script>
@endsection