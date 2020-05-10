<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil Diubah!');
              document.location.href = 'admin.phpl
              </script>";
  } else {
    echo "<script>
              alert('Data Gagal Diubah!');
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
  <h3>Form Ubah Data Buku</h3>
  <form action="" method="POST">
    <ul>
      <input type="hidden" name="id" id="id" value="<?= $buku['id']; ?>">
      <li>
        <label for="GAMBAR">Gambar</label><br>
        <input type="text" name="GAMBAR" id="GAMBAR" required value="<?= $buku['GAMBAR']; ?>"><br></br>
      </li>
      <li>
        <label for="JUDUL">Judul</label><br>
        <input type="text" name="JUDUL" id="JUDUL" required value="<?= $buku['JUDUL']; ?>"><br><br>
      </li>
      <li>
        <label for="TAHUN TERBIT">Tahun Terbit</label><br>
        <input type="text" name="TAHUN TERBIT" id="TAHUN TERBIT" required value="<?= $buku['TAHUN TERBIT']; ?>"><br><br>
      </li>
      <li>
        <label for="PENGARANG">Pengarang</label><br>
        <input type="text" name="PENGARANG" id="PENGARANG" required value="<?= $buku['PENGARANG']; ?>"><br><br>
      </li>
      <li>
        <label for="GENRE">GENRE</label><br>
        <input type="text" name="GENRE" id="GENRE" required value="<?= $buku['GENRE']; ?>"><br><br>
      </li>
      <br>
      <button type="submit" name="ubah">Ubah Data</button>
      <button type="submit">
        <a href="admin.php">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>