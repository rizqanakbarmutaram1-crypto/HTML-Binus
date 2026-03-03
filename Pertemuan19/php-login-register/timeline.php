<?php
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Timeline</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">Halo, <?php echo $_SESSION['name']; ?></span>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">
            <h4>Selamat datang di Timeline</h4>
            <p>Kamu berhasil login 🎉</p>
        </div>
    </div>
</div>
</body>
</html>