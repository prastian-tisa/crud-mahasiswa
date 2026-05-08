<?php
include 'koneksi.php';

$id = $_POST['id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$foto_lama = $_POST['foto_lama'];

$namaFile = $foto_lama;

if($_FILES['foto']['name'] != ""){

    $file = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];

    $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));

    $namaBaru = time() . "." . $ext;

    move_uploaded_file($tmp, "uploads/" . $namaBaru);

    $namaFile = $namaBaru;
}

if($id == ""){

    mysqli_query($conn, "INSERT INTO mahasiswa
    VALUES (
    NULL,
    '$nim',
    '$nama',
    '$jurusan',
    '$namaFile'
    )");

    echo "
    <script>
        alert('Data berhasil ditambah!');
        window.location='index.php';
    </script>
    ";

}else{

    mysqli_query($conn, "UPDATE mahasiswa SET
    nim='$nim',
    nama='$nama',
    jurusan='$jurusan',
    foto='$namaFile'
    WHERE id='$id'
    ");

    echo "
    <script>
        alert('Data berhasil diupdate!');
        window.location='index.php';
    </script>
    ";
}
?>