<?php
include 'config.php';

if(isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO penduduk (username,email,password,name) VALUES ('$username'.'$email','$password', '$name')");

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

        <h3>Register</h3>
        <form method="POST">
            <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
            <input type="email" name="email" class="form-control mb-2" placeholder="Email" required>
            <input type="text" name="name" class="form-control mb-2" placeholder="Nama Lengkap" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button name="register" class="btn btn-success w-100">Register</button>
        </form>

        <a href="login.php">Sudah punya akun?</a>

        </div>
    </div>
</div>
    
</body>
</html>