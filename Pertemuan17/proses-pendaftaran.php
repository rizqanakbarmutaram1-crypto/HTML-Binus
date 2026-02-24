<?php
include 'config.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$asal_sekolah = $_POST['asal_sekolah'];

$sql = "INSERT INTO calon_mahasiswa
(nama, alamat, jenis_kelamin, agama, asal_sekolah)
VALUES
('$nama', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah')";

$query = mysqli_query($koneksi, $sql);

if ($query) {
  header("Location: list-mahasiswa.php");
} else {
  echo "Gagal menyimpan data";
}
?>