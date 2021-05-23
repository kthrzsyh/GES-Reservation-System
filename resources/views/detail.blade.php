@extends('base')
@section('content')
@if(Session::has('message'))
<div class="alert alert-danger" role="alert">
    Anda Sudah Terdaftar!
</div>
@endif
@if(Session::has('kursi'))
<div class="alert alert-danger" role="alert">
    Kursi yang anda pilih berbeda baris, mohon pilih baris yang sama!
</div>
@endif
@if(Session::has('pesan'))
<div class="alert alert-danger" role="alert">
    maaf, kursi telah di pesan!
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger" role="alert">
    terjadi kesalahan !
</div>
@endif
<div class="container form_pendaftaran">
    <h1>{{$event->nama}}</h1>
    <div class="form-group">
        <label for="deskripsi_event" style="margin-bottom: 10px;">Deskripsi Event</label>
        <textarea class="form-control" id="deskripsi_event" readonly style="background-color: white;">{{$event->deskripsi}}</textarea>
    </div>
    <div class="row mb-5">
        <div class="col-sm-4">
            <div class="form-group">
                <label for="kuota" style="margin-bottom: 10px;">Available Seat</label>
                <input class="form-control" readonly id="kuota" style="background-color: white;" value="{{$event->kuota}}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="tanggal" style="margin-bottom: 10px;">Tanggal Event</label>
                <input class="form-control" readonly id="tanggal" style="background-color: white;" value="{{$event->tanggal}}">
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label for="expired" style="margin-bottom: 10px;">Batas Pendaftaran</label>
                <input class="form-control" readonly id="expired" style="background-color: white;" value="{{$event->expired}}">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="d-flex border-information text-green">
                <i class="mdi mdi-information-outline f16" style="margin-right: 20px;"></i>
                <p>Informasi yang akan ditampilkan</p>
            </div>

        </div>
    </div>
    <p>Pesan Kursi</p>
    <div class="border-reservasi">
        @if(auth()->check() && auth()->user()->role == 'member')
        <form action="/member/reservasi" method="POST">
            @csrf
            <input type="hidden" name="id_even" value="{{$event->id}}">
            <input type="hidden" name="tgl_even" value="{{$event->tanggal}}">
            <div style="margin-bottom:10px; margin-top:10px">
                <div class="d-flex align-items-center" style="margin-bottom: 20px;">
                    <a style="display: inline-block; margin-right: 20px;">Jumlah Kursi</a>
                    <div class="d-flex">
                        <a class="tombol-minus" id="minus"><i class="mdi mdi-minus"></i></a>
                        <input type="text" value="1" id="qty" name="qty" readonly style="border-radius:5px; width: 50px; margin-right:10px; margin-left:10px" class="text-center">
                        <a class="tombol-plus" id="plus"> <i class="mdi mdi-plus"></i></a>
                    </div>
                    <div class="flex-grow-1">

                    </div>
                    <!-- trigger modal -->
                    <a class="bt-primary-navbar layout-besar" data-toggle="modal" data-target="#exampleModal">
                        Lihat Layout Kursi
                    </a>

                    <a class="bt-primary-navbar layout-kecil" data-toggle="modal" data-target="#exampleModal">
                        <i class="mdi mdi-eye"></i>
                    </a>
                </div>
                <div class="row margin-bottom-kecil">
                    <div class=" col-lg-1">
                        <label for="">No</label>
                        <input value="1" readonly class="form-control" style="background-color: white; text-align: center;">
                    </div>
                    <div class="col-sm-5">
                        <label for="nama">Nama</label>
                        <input id="nama" name="nama[]" type="text" class="form-control" placeholder="Masukkan Nama" readonly value="{{$member->nama}}">
                    </div>
                    <div class="col-sm-3">
                        <label for="usia">Usia</label>
                        <input id="usia" name="usia[]" type="number" class="form-control" placeholder="Masukkan Usia" readonly value="{{$age}}">
                    </div>
                    <div class="col-sm-3">
                        <label for="idKursi">Nomor Kursi</label>
                        <div class="input-group">
                            <select style="width: 100%;" class="form-select" name="kursi[]" id="idKursi">
                                @foreach($code as $value)
                                <option value="{{$value->id}}" data-type="{{$value->id}}">{{$value->code->code}}{{$value->no_kursi}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div id="daftarKursi">
                </div>
                <!-- @dump($member); -->
            </div>
            <div style="margin-top: 20px;">
                <button class="btn btn-primary" type="submit">Daftar</button>
            </div>
        </form>

        @else
        <div>
            <h5>Silahkan Login Untuk Melakukan Booking!</h5>
        </div>
        @endif


    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Layout Kursi {{$event->nama}} - {{$event->tanggal}}</h5>
                    <a class="close-x" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </a>
                </div>
                <div class="modal-body">
                    <img width="100%" src="{{asset('/img/layout_kursi.png')}}">
                </div>
            </div>
        </div>
    </div>
    @endsection
    @section('js')
    <script>
        var code = @json($code);
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
            $('#idKursi').on('change', function(event) {
                let jumlah = $('#idKursi').val()
                let chosen = $('#idKursi option:selected').map(function() {
                    return $(this).data('type');
                }).get();
                let filterChosen = chosen.filter((item, index) => chosen.indexOf(item) === index);
                console.log(jumlah.length);
                console.log(filterChosen)
                console.log(chosen);
                if (filterChosen.length > 1) {
                    alert("Dilarang Memilih Row Berbeda!");
                    event.preventDefault();
                }


            })
        });
        $(document).on('click', '#minus', function() {
            var qty = $('#qty').val();
            daftarKursi('remove', qty);
            if (qty > 1) {
                var jum = parseInt(qty) - 1;
                $('#qty').val(jum);
            }
        });
        $(document).on('click', '#plus', function() {
            var qty = $('#qty').val();
            if (qty < 4) {
                var jum = parseInt(qty) + 1;
                $('#qty').val(jum);
                daftarKursi('add', jum);
            }
        });

        function daftarKursi(a, b) {
            if (a === 'add') {
                let vcode = '';
                $.each(code, function(key, value) {
                    vcode += '<option value="' + value['id'] + '" data-type="' + value['code']['code'] + '">' + value['code']['code'] + value['no_kursi'] + '</option>'
                })
                $('#daftarKursi').append(
                    '<div class="row margin-bottom-kecil"  id="row' + b + '">\n' +
                    '<div class="col-lg-1"> \n' +
                    '<label for="">No</label>\n' +
                    '<input value="' + b + '" readonly class="form-control" style="background-color: white; text-align: center;">' +
                    '</div>\n' +
                    '<div class="col-sm-5">\n' +
                    '<label for="nama">Nama</label>' +
                    '<input id="nama' + b + '" name="nama[]' + b + '" type="text" class="form-control" placeholder="Masukkan Nama" required>\n' +
                    '</div>\n' +
                    '<div class="col-sm-3">\n' +
                    '<label for="usia">Usia</label>' +
                    '<input id="usia' + b + '" name="usia[]' + b + '" type="number" value="0" class="form-control" placeholder="Masukkan Usia" required>\n' +
                    '</div>\n' +
                    '<div class="col-sm-3">\n' +
                    '<label for="idKursi">Nomor Kursi</label>' +
                    '<div class="input-group">\n' +
                    '<select style="width: 100%;" class="form-select" name="kursi[]' + b + '" id="idKursi' + b + '">\n' +
                    vcode +
                    '</select>\n' +
                    '</div>\n' +
                    '</div>\n' +
                    '</div>');
            } else {
                $('#row' + b).remove();
            }

        }
    </script>
    @endsection