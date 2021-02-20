@extends('admin.base')
@section('content')
<div>
    <form method="POST" action="/updateEvent">
        @csrf
        <input type="hidden" name="id" value="{{$event->id}}">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="{{$event->nama}}">
        <br>
        <label for="deskripsi">deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{$event->deskripsi}}</textarea>
        <br>
        <label for="tanggal">Tanggal :</label>
        <input type="date" name="tanggal" id="tanggal" value="{{$event->tanggal}}">
        <br>
        <label for="kuota">kuota :</label>
        <input type="number" name="kuota" id="kuota" value="{{$event->kuota}}">
        <br>
        <label for="expired">Expired</label>
        <input type="datetime-local" name="expired" id="expired" value="{{date('Y-m-d\TH:i',strtotime($event->expired))}}">
        <br>
        <label for="jam_mulai">jam mulai : </label>
        <input type="time" name="jam_mulai" id="jam_mulai" value="{{$event->jam_mulai}}">
        <br>
        <label for="jam_selesai">jam selesai : </label>
        <input type="time" name="jam_selesai" id="jam_selesai" value="{{$event->jam_selesai}}">
        <br>
        <label for="hari">Hari :</label>
        <select name="hari" id="hari">
            <option value="0" {{$event->hari == '0' ? 'selected' : ''}}>Senin</option>
            <option value="1" {{$event->hari == '1' ? 'selected' : ''}}>Selasa</option>
            <option value="2" {{$event->hari == '2' ? 'selected' : ''}}>Rabu</option>
            <option value="3" {{$event->hari == '3' ? 'selected' : ''}}>Kamis</option>
            <option value="4" {{$event->hari == '4' ? 'selected' : ''}}>Jumat</option>
            <option value="5" {{$event->hari == '5' ? 'selected' : ''}}>Sabtu</option>
            <option value="6" {{$event->hari == '6' ? 'selected' : ''}}>Minggu</option>
        </select>
        <br>

        <input type="submit" value="Simpan">
    </form>
</div>
@endsection