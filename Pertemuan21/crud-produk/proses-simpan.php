<?php

include 'config.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn,"INSERT INTO produk
VALUES(NULL, '$nama', '$harga', '$stok', '$deskripsi',NOW())");

header("Location:index.php");

?>