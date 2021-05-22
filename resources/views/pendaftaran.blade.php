@extends('base')
@section('content')
<div class="bodyku">
    <div class="containerku">
        <div class="title">Form Pendaftaran</div>
        <form method="POST">
            @csrf
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Nama Lengkap</span>
                    <input type="text" placeholder="Masukkan Nama Anda" id="nama" name="nama" required>
                </div>
                <div class="input-box">
                    <span class="details">NIK</span>
                    <input type="text" placeholder="Masukkan NIK Anda" id="nik" name="nik" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Masukkan Email Anda" id="email" name="email">
                </div>
                <div class="input-box">
                    <span class="details">No. Handphone</span>
                    <input type="number" placeholder="Masukkan No. HP Anda" id="hp" name="hp" required>
                </div>
                <div class="input-box">
                    <span class="details">Tempat Lahir</span>
                    <input type="text" placeholder="Masukkan Kota Kelahiran Anda" id="tempat_lahir" name="tempat_lahir" required>
                </div>
                <div class="input-box">
                    <span class="details">Tanggal Lahir</span>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" required>
                </div>
                <div class="input-box">
                    <span class="details">Jenis Kelamin</span>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="1">
                            <label class="form-check-label" for="laki-laki">
                                Laki - Laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="0">
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                </div>
                <div class="title">Alamat</div>
                <div class="input-box">
                    <span class="details">RT/RW</span>
                    <input type="text" placeholder="Masukkan RT/RW" id="rt_rw" name="rt_rw" required>
                </div>
                <div class="input-box">
                    <span class="details">Jalan</span>
                    <input type="text" placeholder="Masukkan Jalan" id="jln" name="jalan" required>
                </div>
                <div class="input-box">
                    <span class="details">Kelurahan / Desa</span>
                    <input type="text" placeholder="Masukkan Kelurahan / Desa" id="kel" name="kel" required>
                </div>
                <div class="input-box">
                    <span class="details">Kecamatan</span>
                    <input type="text" placeholder="Masukkan Kecamatan Anda" id="kec" name="kec" required>
                </div>
                <div class="input-box">
                    <span class="details">Status</span>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="kta" value="1">
                        <label class="form-check-label" for="kta">
                            Belum Ber-KTA
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="status" id="blm_kta" value="2">
                        <label class="form-check-label" for="blm_kta">
                            Sudah Ber-KTA
                        </label>
                    </div>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" placeholder="Buat Password Akun Anda" id="password" name="password" required>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
</div>
@endsection