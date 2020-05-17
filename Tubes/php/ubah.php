<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$NO = $_GET['NO'];
$buku = query("SELECT * FROM buku WHERE NO = '$NO'")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil Diubah!');
              document.location.href = 'admin.php';
              </script>";
  } else {
    echo "<script>
              alert('Data Gagal Diubah!');
              document.location.href = 'admin.php';
              </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
  <link rel="stylesheet" href="../css/style.css">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body class="grey">
  <div class="col s12 m7">
    <h2 class="header center" style="font-family: Vladimir Script">Form Ubah Data Buku</h2>
    <div class="container" style="padding: 50px; border-radius: 5%;">
      <div class="card horizontal">
        <div class="card-stacked">
          <div class="card-content">
            <form action="" method="POST">
              <ul>
                <input type="hidden" name="NO" id="NO" value="<?= $buku['NO']; ?>">
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
                  <input type="text" name="TAHUN_TERBIT" id="TAHUN_TERBIT" required value="<?= $buku['TAHUN_TERBIT']; ?>"><br><br>
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
                <div class="card-action">
                  <button type="submit" name="ubah">Ubah Data</button>
                </div>
                <div class="card-action">
                  <button type="submit"> <a href="admin.php">Kembali</a></button>
                </div>
              </ul>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




  <script type="text/javascript" src="../js/materialize.min.js"></script>
</body>

</html>