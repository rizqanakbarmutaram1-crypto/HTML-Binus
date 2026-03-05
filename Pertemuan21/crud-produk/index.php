<?php
include 'config.php';
?>

<!DOCTYPE html>
<html data-bs-theme="dark">
<head>

    <title>Data Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

    <?php include 'navbar.php'; ?>

    <div class="container">

    <h3 class="mb-3">Data Produk</h3>

    <a href="tambah.php" class="btn btn-primary mb-3">
        Tambah Produk
    </a>

    <table class="table table-bordered table-striped">

    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>

    <?php

    $query = mysqli_query($conn, "SELECT * FROM produk");

    $no = 1;

    while($data = mysqli_fetch_assoc($query)){

    ?>

    <tr>

    <td><?php echo $no++; ?></td>
    <td><?php echo $data['nama_produk']; ?></td>
    <td>Rp <?php echo number_format($data['harga']); ?></td>
    <td><?php echo $data['stok']; ?></td>

    <td>

    <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">
        Edit
    </a>

    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">
        Hapus
    </a>

    </td>

    </tr>

    <?php } ?>

    </tbody>
    </table>
    
    </div>

</body>
</html>