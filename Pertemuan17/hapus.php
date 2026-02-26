<?php 
include("config.php");

$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id=$id";
$query = mysqli_query($conn, $sql);

if ($query) {
  header("Location: list-mahasiswa.php");
} else {
  echo "Gagal menghapus data!";
}
?>