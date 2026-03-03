<?php
session_start();
include 'config.php';

if(isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($conn, "SELECT * FROM penduduk WHERE username='$username'");
    $user = mysqli_fetch_assoc($data);

    if($user && password_verify($password, $user['password'])) {
        $_SESSION['login'] = true;
        $_SESSION['name'] = $user['name'];
        header("Location: timeline.php");
    } else {
        echo "<script>alert('Username atau Password salah');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-body">

        <h3>Login</h3>
        <form method="POST">
            <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
            <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
            <button name="login" class="btn btn-primary w-100">Login</button>
        </form>

        <a href="register.php">Belum punya akun?</a>

        </div>
    </div>
</div>
    
</body>
</html>