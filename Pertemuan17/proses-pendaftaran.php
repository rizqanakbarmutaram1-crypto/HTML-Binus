<?php
include("config.php");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];

$sql = "INSERT INTO mahasiswa (nama, alamat, jenis_kelamin, jurusan)
VALUES ('$nama', '$alamat', '$jenis_kelamin', '$jurusan')";

$query = mysqli_query($conn, $sql);

if ($query) {
  header("Location: list-mahasiswa.php");
} else {
  echo "Gagal menyimpan data!";
}
?>