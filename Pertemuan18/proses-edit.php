<?php
include "config.php";

if(isset($_POST['id'])) {
  
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jurusan = $_POST['jurusan'];

  mysqli_query($conn, "UPDATE mahasiswa SET
      nama='$nama',
      nim='$nim',
      jurusan='$jurusan'
      WHERE id='$id'
      ");

      header("Location: list-mahasiswa.php");
      exit;
} else {
  echo "Data tidak ditemukan!";
}
?>