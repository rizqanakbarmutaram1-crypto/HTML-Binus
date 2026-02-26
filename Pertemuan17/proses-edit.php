<?php
include("config.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE mahasiswa
SET nama='$nama', alamat='$alamat', jurusan='$jurusan'
WHERE id=$id";

$query = mysqli_query($conn, $sql);

if ($query) {
  header("Location: list-mahasiswa.php");
} else {
  echo "Gagal update data!";
}
?>