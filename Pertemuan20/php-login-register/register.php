<?php
include 'config.php';

if(isset($_POST['register'])) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO penduduk (username,email,password,name) VALUES ('$username','$email','$password', '$name')");

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>

<body class="bg-light d-flex align-items-center" style="height:100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">
                    
                    <h4 class="text-center mb-4 fw-bold">Create Account</h4>
                    
                    <form method="POST">
                        <div class="mb-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        
                        <button name="register" class="btn btn-success w-100">Register</button> 
                    </form>
                    
                    <div class="text-center mt-3">
                        <small>Sudah punya akun? <a href="login.php">Login</a></small>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const toggleBtn = document.getElementById('darkModeToggle');

    // cek apakah sebelumnya dark mode aktif
    if(localStorage.getItem('theme') === 'dark'){
        document.body.classList.add('bg-dark', 'text-light');
        document.querySelectorAll('card').forEach(card => {
            card.classList.add('bg-secondary', 'text-light');
        });
    }

    toggleBtn?.addEventListener('click', () => {
        document.body.classList.toggle('bg-dark');
        document.body.classList.toggle('text-light');

        document.querySelectorAll('.card').forEach(card => {
            card.classList.toggle('bg-secondary');
            card.classList.toggle('text-light');
        });

        if(document.body.classList.contains('bg-dark')){
            localStorage.setItem('theme','dark');
        } else {
            localStorage.setItem('theme','light');
        }
    });
</script>
</body>
</html>