<?php
include "config.php";
mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$_GET[id]'");
header("Location: list-mahasiswa.php");
?>