@extends('base')
@section('content')

<div class="container">
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
        </div>
        <div class="mb-3 row">

            <div class="col-sm-3">
                <label for="tgl_lahir col-form-label">Tanggal Lahir</label>
            </div>
            <div class="col-sm-3">
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
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
        <div class="mb-3 row">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <div>
                    <label for="rt-rw">RT/RW</label>
                    <input type="text" class="form-control" id="rt_rw" name="rt_rw" required>
                </div>
                <div>
                    <label for="jln">Jalan</label>
                    <input type="text" class="form-control" id="jln" name="jalan" required>
                </div>
                <div>
                    <label for="kel">Kelurahan / Desa</label>
                    <input type="text" class="form-control" id="kel" name="kel" required>
                </div>
                <div>
                    <label for="kec">Kecamatan</label>
                    <input type="text" class="form-control" id="kec" name="kec" required>
                </div>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
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
        </div>
        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
    </form>
</div>
@endsection