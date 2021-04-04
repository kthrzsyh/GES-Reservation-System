@extends('base')
@section('content')
<div class="container">
    <div class="row">
    @foreach($event as $item)
    <div class="col col-lg-3">
    <div class="card">
            <img src="/img/sample.jpeg" class="card-img-top" alt="gambar_event">
            <div class="card-body">
                <h5 class="card-title">{{$item->nama}}</h5>
                <p class="card-text">{{$item->deskripsi}}</p>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div>Kuota</div>
                <div>{{$item->kuota}}</div>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div>Tanggal Event</div>
                <div>{{$item->tanggal}}</div>
            </div>
            <div style="display: flex; justify-content: space-between;">
                <div>Batas Pendaftaran</div>
                <div>{{$item->expired}}</div>
            </div>
            <!-- <ul class="list-group list-group-flush">
                <li class="list-group-item">{{$item->kuota}}</li>
                <li class="list-group-item">{{$item->tanggal}}</li>
                <li class="list-group-item">{{$item->expired}}</li>
            </ul> -->
            <div class="card-body">
                <a href="#" class="btn btn-primary">Daftar</a>
                <a href="/detail/{{$item->id}}" class="btn btn-success">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
        
        
    </div>


</div>
@endsection