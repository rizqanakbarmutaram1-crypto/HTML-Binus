<?php
include "config.php";

mysqli_query($conn, "INSERT INTO mahasiswa (nama,nim,jurusan)
VALUES ('$_POST[nama]','$_POST[nim]','$_POST[jurusan]')");

header("Location: list-mahasiswa.php");
?>