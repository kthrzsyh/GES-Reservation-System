@extends('base')
@section('content')
<div class="container">
    <div class="hero-page">
        <div class="row">
            <div class="col-md-6 d-flex ">
                <div class="align-self-center">
                    <p class="title-hero">Reservasi Di Sini!</p>
                    <p class="desc-hero">In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available.</p>
                    <a href="" class="bt-secondary" style="margin-top: 16px; display: inline-block">Reservasi Sekarang!</a>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center">
                <img src="{{asset('/img/hero-img.png')}}" style="height: 350px;" alt="">
            </div>
        </div>
    </div>
</div>
<div class="bg-white" style="padding-top: 50px; padding-bottom: 50px">
    <div class="container">
        <div>
            <p style="font-size: 2rem; font-weight: bold;">Event yang Akan Datang</p>
        </div>
        <div class="row">
            @foreach($event as $item)
            <div class="col col-lg-3">
                <div class="cardku">
                    <img src="/img/sample.jpeg" class="card-img-top" alt="gambar_event">
                    <p class="card-title">{{$item->nama}}</p>
                    <p class="card-text">{{$item->deskripsi}}</p>
                    <div class="keterangan">
                        <table>
                            <tr>
                                <td>Available</td>
                                <td style="margin-right: 5px;">: </td>
                                <td>{{$item->kuota}} Seat(s)</td>
                            </tr>
                            <tr>
                                <td>Date</td>
                                <td style="margin-right: 5px;">: </td>
                                <td>{{$item->tanggal}}</td>
                            </tr>
                            <tr>
                                <td>Registration Limit</td>
                                <td style="margin-right: 5px;">:</td>
                                <td>{{$item->expired}}</td>
                            </tr>
                        </table>
                    </div>
                    <a href="/detail/{{$item->id}}" class="bt-primary d-flex justify-content-center align-items-center" style="width: 100%; height: 50px; ">Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>

@endsection