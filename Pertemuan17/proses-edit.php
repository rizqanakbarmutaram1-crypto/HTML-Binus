<?php
include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];

mysqli_query($koneksi,"UPDATE calon_mahasiswa
SET nama='$nama', alamat='$alamat', asal_sekolah='$asal_sekolah'
WHERE id=$id");

header("Location: list-mahasiswa.php");
?>