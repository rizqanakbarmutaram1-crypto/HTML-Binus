<?php
include("config.php");
$id = $_GET['id'];

$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edit Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">

      <h3 class="mb-4">Edit Mahasiswa</h3>

    <form action="proses-edit.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

      <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
      </div>

      <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control"><?php echo $data['alamat']; ?></textarea>
      </div>

      <div class="mb-3">
        <label class="form-label">Jurusan</label>
        <select name="jurusan" class="form-select">
          <option <?php if($data['jurusan']=="Teknik Informatika") echo "selected"; ?>>Teknik Informatika</option>
          <option <?php if($data['jurusan']=="Sistem Informasi") echo "selected"; ?>>Sistem Informasi</option>
          <option <?php if($data['jurusan']=="Manajemen") echo "selected"; ?>>Manajemen</option>
        </select>
      </div>

      <button type="submit" class="btn btn-success">Update</button>
      <a href="list-mahasiswa.php" class="btn btn-secondary">Kembali</a>

      </form>
          
    </div>
  </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>