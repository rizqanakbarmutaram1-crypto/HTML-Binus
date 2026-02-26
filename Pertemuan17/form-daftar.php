<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Pendaftaran Mahasiswa</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

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
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-laki" required>
              <label class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="jenis_kelamin" value="Perempuan">
              <label class="form-check-label">Perempuan</label>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Jurusan</label>
            <select name="jurusan" class="form-select">
              <option>Teknik Informatika</option>
              <option>Sisten Informasi</option>
              <option>Manajemen</option>
            </select>
          </div>

          <button type="submit" class="btn btn-primary">Daftar</button>
          <a href="index.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>