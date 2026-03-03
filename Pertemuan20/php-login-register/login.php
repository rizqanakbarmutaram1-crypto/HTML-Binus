<?php
session_start();
include 'config.php';

$error = "";

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
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>

<body class="bg-light d-flex align-items-center" style="height:100vh;">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0">
                <div class="card-body p-4">

                    <h4 class="text-center mb-4 fw-bold">Login Account</h4>
                    
                    <?php if($error) : ?>
                        <div class="alert alert-danger"><?= $error ?></div>
                        <?php endif; ?>
                        
                        <form method="POST">
                            <div class="mb-3">
                                <label class="form-label">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            
                            <button name="login" class="btn btn-primary w-100">Login</button>
                        </form>
                        
                        <div class="text-center mt-3"></div>
                        <small>Belum punya akun? <a href="register.php">Daftar</a></small>
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