<?php
include 'koneksi.php';

$id = "";
$nim = "";
$nama = "";
$jurusan = "";
$foto = "";

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $query = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");

    $data = mysqli_fetch_array($query);

    $nim = $data['nim'];
    $nama = $data['nama'];
    $jurusan = $data['jurusan'];
    $foto = $data['foto'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Form Mahasiswa</h2>

<form name="formMahasiswa"
method="POST"
action="simpan.php"
enctype="multipart/form-data"
onsubmit="return validasiForm()">

    <input type="hidden" name="id" value="<?= $id; ?>">

    <input type="hidden" name="foto_lama" value="<?= $foto; ?>">

    <p>NIM</p>
    <input type="text" name="nim" value="<?= $nim; ?>">

    <p>Nama Lengkap</p>
    <input type="text" name="nama" value="<?= $nama; ?>">

    <p>Jurusan</p>
    <input type="text" name="jurusan" value="<?= $jurusan; ?>">

    <p>Foto</p>
    <input type="file" name="foto">

    <br><br>

    <button type="submit">Simpan</button>

</form>

<script src="validasi.js"></script>

</body>
</html>