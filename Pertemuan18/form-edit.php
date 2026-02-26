<?php
include "auth.php";
include "config.php";

$id = $_GET['id'];
$data = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container mt-4">
  <h3>Edit Mahasiswa</h3>

  <form method="POST" action="proses-edit.php">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
    <input type="text" name="nama" class="form-control mb-2" value="<?php echo $data['nama']; ?>">
    <input type="text" name="nim" class="form-control mb-2" value="<?php echo $data['nim']; ?>">
    <input type="text" name="jurusan" class="form-control mb-2" value="<?php echo $data['jurusan']; ?>">
    <button class="btn btn-warning">Update</button>
  </form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
</div>
</body>
</html>