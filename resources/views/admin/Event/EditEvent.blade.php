@extends('admin.base')
@section('content')
<div class="container form_pendaftaran">
    <h3>Form Edit Event</h3>
    <div class="p-3" style="border: 1px solid grey; border-radius: 10px">
        <form method="POST" action="/admin/event/update">
            @csrf
            <input type="hidden" name="id" value="{{$event->id}}">
            <div>
                <div class="form-group">
                    <label for="nama" class="jarak_bawah">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{$event->nama}}">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="deskripsi" class="jarak_bawah">Deskripsi Event</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10">{{$event->deskripsi}}</textarea>
                </div>
            </div>
            <div>
                <div class="from-group">
                    <label for="tanggal" class="jarak_bawah">Tanggal</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{$event->tanggal}}">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="kuota" class="jarak_bawah">Kuota</label>
                    <input type="number" class="form-control" name="kuota" id="kuota" value="{{$event->kuota}}">
                </div>
            </div>
            <div>
                <div class="form-group">
                    <label for="expired" class="jarak_bawah">Expired Date</label>
                    <input type="datetime-local" class="form-control" name="expired" id="expired" value="{{date('Y-m-d\TH:i',strtotime($event->expired))}}">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jam_mulai" class="jarak_bawah">Waktu Mulai</label>
                        <input type="time" name="jam_mulai" id="jam_mulai" class="form-control" value="{{$event->jam_mulai}}">
                    </div>
                </div>
                <div class="col-sm-6">
                    <label for="jam_selesai" class="jarak_bawah">Waktu Selesai</label>
                    <input type="time" name="jam_selesai" class="form-control" id="jam_selesai" value="{{$event->jam_selesai}}">
                </div>
            </div>
            <div class="form-group">
                <label for="hari" class="jarak_bawah">Hari</label>
                <select name="hari" id="hari" class="form-control">
                    <option value="0" {{$event->hari == '0' ? 'selected' : ''}}>Senin</option>
                    <option value="1" {{$event->hari == '1' ? 'selected' : ''}}>Selasa</option>
                    <option value="2" {{$event->hari == '2' ? 'selected' : ''}}>Rabu</option>
                    <option value="3" {{$event->hari == '3' ? 'selected' : ''}}>Kamis</option>
                    <option value="4" {{$event->hari == '4' ? 'selected' : ''}}>Jumat</option>
                    <option value="5" {{$event->hari == '5' ? 'selected' : ''}}>Sabtu</option>
                    <option value="6" {{$event->hari == '6' ? 'selected' : ''}}>Minggu</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Simpan</button>
        </form>
    </div>
</div>
@endsection