@extends('base')
@section('content')
<div class="container form_pendaftaran">
    <div class="title">Form Pendaftaran</div>
    <form method="POST">
        @csrf
        <div class="">
            <div class="form-group">
                <label for="nama" class="jarak_bawah">Nama Lengkap</label>
                <input type="text" class="form-control" placeholder="Masukkan Nama Anda" id="nama" name="nama" required>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="jarak_bawah">NIK</label>
                        <input type="text" class="form-control" placeholder="Masukkan NIK Anda" id="nik" name="nik" required>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="jarak_bawah">Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email Anda" id="email" name="email">
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label class="jarak_bawah">No. Handphone</label>
                        <input type="number" class="form-control" placeholder="Masukkan No. HP Anda" id="hp" name="hp" required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="jarak_bawah">Tempat Lahir</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kota Kelahiran Anda" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="jarak_bawah">Tanggal Lahir</label>
                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label class="jarak_bawah" class="jarak_bawah">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" class="form-control" type="radio" name="jenis_kelamin" id="laki-laki" value="1">
                        <label class="form-check-label" for="laki-laki">
                            Laki - Laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="form-control" type="radio" name="jenis_kelamin" id="perempuan" value="0">
                        <label class="form-check-label" for="perempuan">
                            Perempuan
                        </label>
                    </div>
                </div>
            </div>
            <div class="title">Alamat</div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="form-group">
                        <label class="jarak_bawah">Jalan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Jalan" id="jln" name="jalan" required>
                    </div>
                </div>
                <div class="col-sm-1">
                    <div class="form-group">
                        <label class="jarak_bawah">RT/RW</label>
                        <input type="text" class="form-control" placeholder="Masukkan RT/RW" id="rt_rw" name="rt_rw" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="jarak_bawah">Kelurahan / Desa</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kelurahan / Desa" id="kel" name="kel" required>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label class="jarak_bawah">Kecamatan</label>
                        <input type="text" class="form-control" placeholder="Masukkan Kecamatan Anda" id="kec" name="kec" required>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="jarak_bawah">Status</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" class="form-control" type="radio" name="status" id="kta" value="1">
                        <label class="form-check-label" for="kta">
                            Sudah Ber-KTA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" class="form-control" type="radio" name="status" id="blm_kta" value="2">
                        <label class="form-check-label" for="blm_kta">
                            Belum Ber-KTA
                        </label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="jarak_bawah">Password</label>
                        <input type="password" class="form-control" placeholder="Buat Password Akun Anda" id="password" name="password" required>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="jarak_bawah">Konfirmasi Password</label>
                        <input type="password" class="form-control" placeholder="konfirmasi Password" name="password" required>
                    </div>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary" style="margin-top: 20px;">Daftar</button>
    </form>
</div>
@endsection