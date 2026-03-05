<?php 

include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

mysqli_query($conn,"UPDATE produk SET

nama_produk='$nama',
harga='$harga',
stok='$stok',
deskripsi='$deskripsi'

WHERE id='$id'");

header("Location:index.php");

?>