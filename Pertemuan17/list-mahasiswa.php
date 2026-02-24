<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">

    <h3 class="mb-3">Data Mahasiswa</h3>
    <a href="form-daftar.php" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

<table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Asal Sekolah</th>
        <th>Aksi</th>
      </tr>
    </thead>
<tbody>

<?php
$sql = "SELECT * FROM calon_mahasiswa";
$query = mysqli_query($koneksi, $sql);
$no = 1;

while($data = mysqli_fetch_assoc($query)){
    echo "<tr>
      <td>".$no++."</td>
      <td>".$data['nama']."</td>
      <td>".$data['alamat']."</td>
      <td>".$data['jenis_kelamin']."</td>
      <td>".$data['agama']."</td>
      <td>".$data['asal_sekolah']."</td>
      <td>
      <a href='form-edit.php?id=".$data['id']."' class='btn btn-warning btn-sm'>Edit</a>
      <a href='hapus.php?id=".$data['id']."' class='btn btn-danger btn-sm'>Hapus</a>
      </td>
    </tr>";
}
?>

</tbody>
</table>

      </div>
    </div>
</div>
  
</body>
</html>