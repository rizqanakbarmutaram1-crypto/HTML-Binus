<?php
include 'config/database.php';
?>

<!DOCTYPE html>
<html>

<head>

    <title>CRUD Produk</title>

    <link rel="stylesheet" href="assets/style.css">

</head>

<body>

<div class="container">

    <h1>Data Produk</h1>

    <a class="btn tambah" href="produk/tambah.php"></a>

    <br><br>

    <table>

    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
    </tr>

    <?php

    $no=1;

    $data=mysqli_query($conn,"SELECT * FROM produk");

    while($d=mysqli_fetch_array($data)){

    ?>

    <tr>

    <td><?=$no++?></td>
    <td><?=$d['nama_produk']?></td>
    <td>Rp <?=number_format($d['harga'])?></td>
    <td><?=$d['stok']?></td>

    <td>

    <a class="btn edit" href="produk/edit.php?id=<?=$d['id']?>">Edit</a>
    <a class="btn hapus" href="produk/hapus.php?id=<?=$d['id']?>">Hapus</a>

    </td>

    </tr>
    
    <?php } ?>

    </table>

</div>

</body>

</html>