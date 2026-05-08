<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id='$id'");

$d = mysqli_fetch_array($data);

if(file_exists("uploads/" . $d['foto'])){
    unlink("uploads/" . $d['foto']);
}

mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id'");

echo "
<script>
    alert('Data berhasil dihapus!');
    window.location='index.php';
</script>
";
?>