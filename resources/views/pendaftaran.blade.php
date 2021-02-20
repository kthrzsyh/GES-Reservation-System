<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <form method="POST">
            @csrf
            <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama">
            <br>
            <label for="nik">NIK</label>
            <input type="text" name="nik">
            <br>
            <label for="username">username :</label>
            <input type="text" name="username" id="username">
            <br>
            <label for="password">password :</label>
            <input type="text" name="password" id="password">
            <br>
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir">
            <br>
            <label for="alamat">Alamat : </label>
            <input type="text" name="alamat" id="alamat">
            <br>
            <label for="hp">No. HP :</label>
            <input type="number" name="hp" id="hp">
            <br>
            <label for="jk">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="1" id="laki-laki">
            <label for="laki-laki">Laki-Laki</label>
            <input type="radio" name="jenis_kelamin" value="2" id="perempuan">
            <label for="perempuan">Perempuan</label>
            <br>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email">
            <br>
            <input type="submit" value="Simpan">
        </form>
    </div>
</body>

</html>