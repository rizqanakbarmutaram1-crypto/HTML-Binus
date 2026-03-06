<?php

include '../config/database.php';

$id=$_GET['id'];

$data=mysqli_query($conn,"SELECT * FROM produk WHERE id='$id'");

$d=mysqli_fetch_array($data);

?>

<link rel="stylesheet" href="../assets/style.css">

<div class="container">

<h1>Edit Produk</h1>

<form action="update.php" method="POST">
    <input type="hidden" name="id" value="<?=$d['id']?>">
    <input type="text" name="nama_produk" value="<?=$d['nama_produk']?>">
    <input type="number" name="harga" value="<?=$d['harga']?>">
    <input type="number" name="stok" value="<?=$d['stok']?>">

    <button type="submit">Update</button>

</form>

</div>