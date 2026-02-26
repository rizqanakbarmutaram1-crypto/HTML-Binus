<?php
session_start();
include "config.php";

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $query = mysqli_query($conn, "SELECT * FROM users
  WHERE username='$username'
  AND password='$password'");

  if (mysqli_num_rows($query) > 0) {
    $_SESSION['user'] = $username;
    header("Location: index.php");
  } else {
    $error = "Login gagal!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center">Login</h4>

          <?php if(isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

            <form method="POST">
              <input type="text" name="username" class="form-control mb-2" placeholder="Username">
              <input type="password" name="password" class="form-control mb-2" placeholder="Password">
              <button name="login" class="btn btn-primary w-100">Login</button>
            </form>

            <a href="register.php" class="d-block text-center mt-2">Daftar akun</a>

        </div>
      </div>
    </div>
  </div>
</div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>