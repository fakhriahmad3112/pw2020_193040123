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
            alert('Data Berhasil ditambahkan!'); 
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data Gagal ditambahkan!'); 
          </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <title>Document</title>
</head>

<body class="grey">
  <h3 class="center" style="font-family: Vladimir Script">Form Tambah Data Buku</h3>
  <div class="col s12 m7">
    <div class="container white" style="padding: 50px; border-radius: 5%; box-shadow: 0 0 5px rgba(0,0,0,0.3);">
      <div class="card horizontal">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <form action="POST">
            <ul>
              <li>
                <label for="GAMBAR">Gambar</label>
                <input type="text" name="GAMBAR"><br></br>
              </li>
              <li>
                <label for="JUDUL">Judul</label>
                <input type="text" name="JUDUL"><br></br>
              </li>
              <li>
                <label for="TAHUN_TERBIT">Tahun Terbit</label>
                <input type="text" name="TAHUN_TERBIT"><br></br>
              </li>
              <li>
                <label for="PENGARANG">Pengarang</label>
                <input type="text" name="PENGARANG"><br></br>
              </li>
              <li>
                <label for="GENRE">Genre</label>
                <input type="text" name="GENRE">
              </li>
              <br>
              <button type="submit" name="tambah">Tambah Data</button>
              <button type="submit">
                <a href="admin.php">Kembali</a>
              </button>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>



</body>

</html>