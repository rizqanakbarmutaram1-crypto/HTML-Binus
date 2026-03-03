<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>PHP Login Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>

<body class="bg-light">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">MyApp</a>

        <div>
            <button id="darkModeToggle" class="btn btn-outline-light btn-sm me-2">
                🌙 Dark Mode
            </button>
            <a href="login.php" class="btn btn-outline-light btn-sm me-2">Login</a>
            <a href="register.php" class="btn btn-primary btn-sm">Register</a>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="container mt-5">
    <div class="row align-items-center">

    <div class="col-md-6">
        <h1 class="fw-bold">Sistem Login Modern</h1>
        <p class="text-muted">
            Project PHP Login & Register menggunakan Bootstrap 5.
            Tampilan lebih profesional dan responsive
        </p>
        <a href="register.php" class="btn btn-primary btn-lg">Mulai Sekarang</a>
    </div>

    <div class="col-md-6 text-center">
        <img src="https://cdn-icons-png.flaticon.com/512/295/295128.png" width="250">
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