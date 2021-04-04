@extends('base')
@section('content')
<div class="row">
    <div class="col col-lg-6">
        <div>
            gambar
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
            <div style="margin-bottom:10px; margin-top:10px">
                <div>
                    <div class="row" style="margin-top: 10px; margin-bottom: 10px">
                        <a href="" class="btn btn-danger" style="width: 40px; margin-right: 10px;">-</a>
                        <input type="text" style="width: 40px; margin-left: 10 px; margin-right: 10px ">
                        <a href="" class="btn btn-primary" style="width: 40px; margin-left: 10px; margin-right: 10px">+</a>
                    </div>
                </div>
                <select style="width: 100%;" class="js-example-basic-multiple" name="kursi[]" multiple="multiple" id="idKursi">
                    <option value="A1" data-type="A">A1</option>
                    <option value="A2" data-type="A">A2</option>
                    <option value="A3" data-type="A">A3</option>
                    <option value="A4" data-type="A">A4</option>
                    <option value="A5" data-type="A">A5</option>
                    <option value="B1" data-type="B">B1</option>
                    <option value="B2" data-type="B">B2</option>
                    <option value="B3" data-type="B">B3</option>
                    <option value="B4" data-type="B">B4</option>
                    <option value="B5" data-type="B">B5</option>
                </select>
            </div>
            <div>
                <a href="#" class="btn btn-primary">Daftar</a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('js')
<script>
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
</script>
@endsection