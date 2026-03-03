<?php
$conn = mysqli_connect("localhost", "root", "", "penduduk");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>