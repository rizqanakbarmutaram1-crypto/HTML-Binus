<?php
include 'config.php';

$id = $_GET['id'];
mysqli_query($koneksi,"DELETE FROM calon_mahasiswa WHERE id=$id");

header("Location: list-mahasiswa.php");
?>