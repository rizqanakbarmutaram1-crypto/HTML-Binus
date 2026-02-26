<?php include "auth.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<?php include "navbar.php"; ?>

<div class="container mt-4">
  <div class="alert alert-success">
    Selamat datang, <?php echo $_SESSION['user']; ?>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</nav>
</body>
</html>