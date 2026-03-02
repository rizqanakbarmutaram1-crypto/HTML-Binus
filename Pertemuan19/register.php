<?php
include 'config.php';

$message = '';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email    = $_POST['email'];
    $name     = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Upload foto
    if(isset($_FILES['photo']) && $_FILES['photo']['name'] != ''){
        $photo = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], 'img/'.$photo);
    } else {
        $photo = 'default.svg';
    }

    $query = "INSERT INTO penduduk (username,email,password,name,photo) VALUES ('$username','$email','$password','$name','$photo')";
    if (mysqli_query($conn, $query)) {
        $message = "Registrasi berhasil. Silakan <a href='login.php'>Login</a>";
    } else {
        $message = "Gagal: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Register</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2>Register</h2>
    <?php if($message) echo "<div class='alert alert-info'>$message</div>"; ?>
    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label>Username</label>
            <input type="text" name="username" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" name="photo" class="form-control">
        </div>
        <button type="submit" name="register" class="btn btn-primary">Register</button>
        <a href="login.php" class="btn btn-link">Login</a>
    </form>
</div>
</body>
</html>