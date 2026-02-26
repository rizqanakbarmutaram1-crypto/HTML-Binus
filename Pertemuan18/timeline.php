<?php
include "auth.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Timeline</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<!-- Navbar -->
 <nav class="navbar navbar-dark bg-primary">
  <div class="container">
    <span class="navbar-brand">Aplikasi Mahasiswa</span>
    <div>
      <a href="index.php" class="btn btn-light btn-sm">Dashboard</a>
      <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
  </div>
 </nav>

 <!-- Content -->
  <div class="container mt-4">
    <div class="card shadow">
      <div class="card-body">
        <h4>Timeline</h4>
        <p>Halo, <strong><?php echo $_SESSION['user']; ?></strong></p>

        <div class="alert alert-success">
         ✅ Anda Berhasil login ke sistem.
        </div>

        <div class="alert alert-info">
         📚 Silakan kelola data mahasiswa melalui menu Dashboard.
        </div>
      </div>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>