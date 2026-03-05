<?php

include 'config.php';

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM produk WHERE id=$id");

$d = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html data-bs-theme="dark">
<head>

    <title>Edit Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

    <h3>Edit Produk</h3>

    <form action="proses-update.php" method="POST">

    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $d['nama_produk']; ?>">
    </div>
    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $d['nama_produk']; ?>">
    </div>
    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control" value="<?php echo $d['nama_produk']; ?>">
    </div>
    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"><?php echo$d['deskripsi']; ?></textarea>
    </div>

    <button class="btn btn-success">
        Update
    </button>

    <a href="index.php" class="btn btn-secondary">
        Kembali
    </a>
    
    </form>

</div>

</body>
</html>