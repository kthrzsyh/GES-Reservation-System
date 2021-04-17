@extends('base')
@section('content')
<div class="row">
    <div class="col col-lg-6">
        <div>
            <img width="700" src="{{asset('/img/layout_kursi.png')}}" alt="">
        </div>
    </div>
    <div class="col col-lg-6">
        <div>
            <h1>{{$event->nama}}</h1>
            <div style="display: flex; justify-content: space-between;">
                <div>{{$event->deskripsi}}</div>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div>Available Seat</div>
                <div>{{$event->kuota}}</div>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div>Tanggal Event</div>
                <div>{{$event->tanggal}}</div>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div>Batas Pendaftaran</div>
                <div>{{$event->expired}}</div>
            </div>
            @if(auth()->check() && auth()->user()->role == 'member')
            <form action="/member/reservasi" method="POST">
                @csrf
                <input type="hidden" name="id_even" value="{{$event->id}}">
                <input type="hidden" name="tgl_even" value="{{$event->tanggal}}">
                <div style="margin-bottom:10px; margin-top:10px">
                    <div class="row" style="margin-top: 10px; margin-bottom: 10px">
                        <a class="btn btn-danger" style="width: 40px; margin-right: 10px;" id="minus">-</a>
                        <input type="text" style="width: 40px; margin-left: 10 px; margin-right: 10px " value="1" id="qty" name="qty" readonly>
                        <a class="btn btn-primary" style="width: 40px; margin-left: 10px; margin-right: 10px" id="plus">+</a>
                    </div>
                    <div class="row" style="margin-bottom: 10px;">
                        <div class="col col-lg-1">
                            <label for="">1</label>
                        </div>
                        <div class="col col-lg-5">
                            <input name="nama[]" type="text" class="form-control" placeholder="Masukkan Nama" readonly value="{{$member->nama}}">
                        </div>
                        <div class="col col-lg-3">
                            <input name="usia[]" type="number" class="form-control" placeholder="Masukkan Usia" readonly value="{{$age}}">
                        </div>
                        <div class="col col-lg-3">
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
                <div>
                    <button class="btn btn-primary" type="submit">Daftar</button>
                </div>
            </form>

            @else
            <div>
                <h5>Silahkan Login Untuk Melakukan Booking!</h5>
            </div>
            @endif

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
                '<div class="row" style="margin-bottom: 10px;" id="row' + b + '">\n' +
                '<div class="col col-lg-1"> \n' +
                '<label for="">' + b + '</label>\n' +
                '</div>\n' +
                '<div class="col col-lg-5">\n' +
                '<input id="nama' + b + '" name="nama[]' + b + '" type="text" class="form-control" placeholder="Masukkan Nama" required>\n' +
                '</div>\n' +
                '<div class="col col-lg-3">\n' +
                '<input id="usia' + b + '" name="usia[]' + b + '" type="number" value="0" class="form-control" placeholder="Masukkan Usia" required>\n' +
                '</div>\n' +
                '<div class="col col-lg-3">\n' +
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