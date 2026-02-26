<?php include("config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<div class="container mt-5">
  <div class="card shadow">
    <div class="card-body">

    <div class="d-flex justify-content-between mb-3">
      <h3>Data Mahasiswa</h3>
      <a href="form-daftar.php" class="btn btn-primary">+ Tambah</a>
    </div>

    <table class="table table-bordered table-striped">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Jenis Kelamin</th>
          <th>Jurusan</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

      <?php
      $sql = "SELECT * FROM mahasiswa";
      $query = mysqli_query($conn, $sql);
      $no = 1;

      while($data = mysqli_fetch_array($query)) {
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['alamat']."</td>";
        echo "<td>".$data['jenis_kelamin']."</td>";
        echo "<td>".$data['jurusan']."</td>";
        echo "<td>
        <a href='form-edit.php?id=".$data['id']."' class='btn btn-warning btn-sm'>Edit</a>
        <a href='hapus.php?id=".$data['id']."' class='btn btn-danger btn-sm'
        click='return confirm(\"Yakin ingin hapus?\">'Hapus</a>
        </td>";
        echo "</tr>";
      }
      ?>

        </tbody>
      </table>

    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>