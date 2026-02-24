<?php
$koneksi = mysqli_connect("localhost","root","","pendaftaran_mahasiswa");

if(!$koneksi) {
  die("Koneksi gagal:" . mysqli_connect_error());
}
?>