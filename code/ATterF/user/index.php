<?php session_start();
require('../conn.php');
define ('BASEURL', 'http://localhost/pjbl-atter/code/ATter');
// Periksa apakah pengguna sudah login
if (!isset($_SESSION['username'])) {
      header("Location: ../login.php"); // Redirect pengguna ke halaman login jika belum login
      exit;
  }
  
  if (isset($_SESSION['username'])) {
      $id = $_SESSION['username'];
      $query = "SELECT * FROM login WHERE username='$id'";
      $result = mysqli_query($conn, $query);
      $data = mysqli_fetch_assoc($result);
  
      // Pastikan data ditemukan sebelum menampilkannya
      if (!$data) {
          echo "Data tidak ditemukan, menuju halaman<a href='tambah.php'>tambah</a> untuk menambah data.";
          exit;
      } 
  } 
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User page</title>
</head>
<body>
  <h1>HALO, <?= $data['username'];?></h1>
</body>
</html> 