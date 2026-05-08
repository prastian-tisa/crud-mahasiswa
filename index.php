<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Data Mahasiswa</h2>

<br>

<a href="form.php">+ Tambah Data</a>

<br><br>

<table>
    <tr>
        <th>No</th>
        <th>Foto</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    while($d = mysqli_fetch_array($data)){
    ?>

    <tr>
        <td><?= $no++ ?></td>

        <td>
            <img src="uploads/<?= $d['foto']; ?>" width="80">
        </td>

        <td><?= $d['nim']; ?></td>
        <td><?= $d['nama']; ?></td>
        <td><?= $d['jurusan']; ?></td>

        <td>
            <a href="form.php?id=<?= $d['id']; ?>">Edit</a>

            <a href="hapus.php?id=<?= $d['id']; ?>"
            onclick="return konfirmasiHapus()">
            Hapus
            </a>
        </td>
    </tr>

    <?php } ?>

</table>

<script src="validasi.js"></script>

</body>
</html>