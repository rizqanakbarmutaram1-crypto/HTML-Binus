<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">
  
<div class="container mt-5">
    <div class="card shadow">
      <div class="card-body">

    <h3 class="mb-4">Form Pendaftaran Mahasiswa</h3>

    <form action="proses-pendaftaran.php" method="POST">

<div class="mb-3">
    <label class="form-label">Nama</label>
    <input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" required></textarea>
</div>

<div class="mb-3">
    <label class="form-label">Jenis Kelamin</label><br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan" > Perempuan
</div>

<div class="mb-3">
    <label class="form-label">Agama</label>
    <select name="agama" class="form-select" required>
      <option value="">-- Pilih --</option>
      <option>Islam</option>
      <option>Kristen</option>
      <option>Hindu</option>
      <option>Budha</option>
    </select>
</div>

<div class="mb-3">
    <label class="form-label">Asal Sekolah</label>
    <input type="text" name="asal_sekolah" class="form-control" required>
</div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="list-mahasiswa.php" class="btn btn-secondary">Kembali</a>

</form>

      </div>
    </div>
</div>

</body>
</html>