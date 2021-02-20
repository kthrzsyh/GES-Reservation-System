@extends('admin.base')
@section('content')
<div>
    <form method="POST">
        @csrf
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama">
        <br>
        <label for="deskripsi">deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        <br>
        <label for="tanggal">Tanggal :</label>
        <input type="date" name="tanggal" id="tanggal">
        <br>
        <label for="kuota">kuota :</label>
        <input type="number" name="kuota" id="kuota">
        <br>
        <label for="expired">Expired</label>
        <input type="datetime-local" name="expired" id="expired">
        <br>
        <label for="jam_mulai">jam mulai : </label>
        <input type="time" name="jam_mulai" id="jam_mulai">
        <br>
        <label for="jam_selesai">jam selesai : </label>
        <input type="time" name="jam_selesai" id="jam_selesai">
        <br>
        <label for="hari">Hari :</label>
        <select name="hari" id="hari">
            <option value="0">Senin</option>
            <option value="1">Selasa</option>
            <option value="2">Rabu</option>
            <option value="3">Kamis</option>
            <option value="4">Jumat</option>
            <option value="5">Sabtu</option>
            <option value="6">Minggu</option>
        </select>
        <br>

        <input type="submit" value="Simpan">
    </form>
</div>
@endsection