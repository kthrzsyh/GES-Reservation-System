@extends('admin.base')
@section('content')
<div class="container form_pendaftaran">
    <div class="title">Form Tambah Event</div>
    <div class="p-3" style="border: 1px solid grey; border-radius: 10px">
        <form method="POST">
            @csrf
            <div>
                <div class="form-group">
                    <label for="nama" class="jarak_bawah">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="deskripsi" class="jarak_bawah">Deskripsi Event</label>
                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" class="form-control" required></textarea>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="tanggal" class="jarak_bawah">Tanggal</label>
                    <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="kuota" class="jarak_bawah">Kuota</label>
                    <input type="number" name="kuota" id="kuota" class="form-control">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="expired" class="jarak_bawah">Expired Date</label>
                    <input type="datetime-local" name="expired" id="expired" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jam_mulai" class="jarak_bawah">Waktu Mulai</label>
                        <input type="time" name="jam_mulai" id="jam_mulai" class="form-control" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jam_selesai" class="jarak_bawah">Waktu Selesai</label>
                        <input type="time" name="jam_selesai" id="jam_selesai" class="form-control" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="hari" class="jarak_bawah">Hari</label>
                <select name="hari" id="hari">
                    <option value="0">Senin</option>
                    <option value="1">Selasa</option>
                    <option value="2">Rabu</option>
                    <option value="3">Kamis</option>
                    <option value="4">Jumat</option>
                    <option value="5">Sabtu</option>
                    <option value="6">Minggu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Simpan</button>
        </form>
    </div>
</div>
@endsection