<?php

include '../config/database.php';

$nama=$_POST['nama_produk'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];

mysqli_query($conn,"INSERT INTO produk VALUES(NULL,'$nama','$harga','$stok',NOW())");

header("location:../index.php");

?>