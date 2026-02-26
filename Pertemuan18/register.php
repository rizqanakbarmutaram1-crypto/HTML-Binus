<?php
include "config.php";

if (isset($_POST['register'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  mysqli_query($conn, "INSERT INTO users (username,password)
  VALUES ('$username','$password')");

  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
          <h4 class="text-center">Register</h4>

          <form method="POST">
            <input type="text" name="username" class="form-control mb-2" placeholder="Username">
            <input type="password" name="password" class="form-control mb-2" placeholder="Password">
            <button name="register" class="btn btn-success w-100">Daftar</button>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>