<?php
include 'config.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($koneksi,"SELECT * FROM calon_mahasiswa WHERE id=$id"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
<div class="card shadow">
<div class="card-body">

<h3>Edit Mahasiswa</h3>

<form action="proses-edit.php" method="POST">
<input type="hidden" name="id" value="<?= $data['id']; ?>">

<input type="text" name="nama" value="<?= $data['nama']; ?>" class="form-control mb-2" required>
<textarea name="alamat" class="form-control mb-2" required><?= $data['alamat']; ?></textarea>
<input type="text" name="asal_sekolah" value="<?= $data['asal_sekolah']; ?>" class="form-control mb-2" required>

<button class="btn btn-success">Update</button>
</form>

</div>
</div>
</div>
  
</body>
</html>