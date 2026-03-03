<?php include 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Timeline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"></head>

<body class="bg-light">

<nav class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
        <span class="navbar-brand">Dashboard</span>
         <div class="text-end mb-3">
                <button id="darkModeToggle" class="btn btn-outline-light btn-sm me-2">
                🌙 Dark Mode
            </button>
        </div>
        <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
    </div>
</nav>

<div class="container mt-5">

    <div class="row">
        
        
        <div class="col-md-4">
            <div class="card shadow border-0">
                <div class="card-body text-center">
                    <h5>Welcome</h5>
                    <h4 class="fw-bold"><?= $_SESSION['name']; ?></h4>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-body">
                    <h5>Activity</h5>
                    <p>Selamat datang di sistem login modern menggunakan Bootstrap 5.</p>
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