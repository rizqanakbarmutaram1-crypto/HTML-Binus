<!DOCTYPE html>
<html data-bs-theme="dark">

<head>

    <title>Tambah Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h3>Tambah Produk</h3>

<form action="proses-simpan.php" method="POST">

<div class="mb-3">
    <label>Nama Produk</label>
    <input type="text" name="nama" class="form-control" required>
</div>
<div class="mb-3">
    <label>Harga</label>
    <input type="number" name="harga" class="form-control" required>
</div>
<div class="mb-3">
    <label>Stok</label>
    <input type="number" name="stok" class="form-control" required>
</div>
<div class="mb-3">
    <label>Deskripsi</label>
    <textarea name="deskripsi" class="form-control"></textarea>
</div>

<button class="btn btn-success">
    Simpan
</button>

<a href="index.php" class="btn btn-secondary">
    Kembali
</a>

</form>

</div>
    
</body>
</html>