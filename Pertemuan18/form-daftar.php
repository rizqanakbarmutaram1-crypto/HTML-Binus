<?php include "auth.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tambah Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container mt-4">
  <h3>Tambah Mahasiswa</h3>

  <form method="POST" action="proses-pendaftaran.php">
    <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
    <input type="text" name="nim" class="form-control mb-2" placeholder="NIM">
    <input type="text" name="jurusan" class="form-control mb-2" placeholder="Jurusan">
    <button class="btn btn-success">Simpan</button>
  </form>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
</div>
</body>
</html>