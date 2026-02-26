<?php 
include "auth.php";
include "config.php";
$query = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container mt-4">
  <h3>Data Mahasiswa</h3>
  <a href="form-daftar.php" class="btn btn-primary mb-3">+ Tambah</a>

  <table class="table table-bordered">
    <tr>
      <th>Nama</th>
      <th>NIM</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>

    <?php while($data = mysqli_fetch_array($query)) { ?>
  <tr>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['nim']; ?></td>
    <td><?php echo $data['jurusan']; ?></td>
  <td>
    <a href="form-edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning btn-sm">Edit</a> 
    <a href="hapus.php?id=<?php echo $data['id']; ?>" class="btn btn-danger btn-sm">Hapus</a> 
</td>
</tr>
<?php 
}?>

  </table>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
</div>
</body>
</html>