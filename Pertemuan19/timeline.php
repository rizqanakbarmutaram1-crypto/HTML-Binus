<?php
session_start();
if(!isset($_SESSION['user'])) {
    header('Location: login.php');
}
$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Timeline</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Selamat Datang, <?= $user['name'] ?>!</h2>
    <img src="img/<?= $user['photo'] ?>" width="100" class="rounded-circle mb-3">
    <p>Username: <?= $user['username'] ?></p>
    <p>Email: <?= $user['email'] ?></p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</body>
</html>