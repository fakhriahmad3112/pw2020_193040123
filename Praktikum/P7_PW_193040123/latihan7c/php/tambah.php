<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil Ditambahkan!');
              document.location.href = 'admin.phpl
              </script>";
  } else {
    echo "<script>
              alert('Data Gagal Ditambahkan!');
              document.location.href = 'admin.phpl
              </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Form Tambah Data Buku</h3>
  <form action="POST">
    <ul>
      <li>
        <label for="GAMBAR">Gambar</label>
        <input type="text" name="GAMBAR" required><br></br>
      </li>
      <li>
        <label for="JUDUL">Judul</label>
        <input type="text" name="JUDUL" required><br></br>
      </li>
      <li>
        <label for="TAHUN TERBIT">Tahun Terbit</label>
        <input type="text" name="TAHUN TERBIT" required><br></br>
      </li>
      <li>
        <label for="PENGARANG">Pengarang</label>
        <input type="text" name="PENGARANG" required><br></br>
      </li>
      <li>
        <label for="GENRE">Genre</label>
        <input type="text" name="GENRE" required>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data</button>
      <button type="submit">
        <a href="admin.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>