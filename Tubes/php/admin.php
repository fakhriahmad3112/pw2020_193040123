<?php

require 'functions.php';

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

//menghubungkan dengan file php lainnya

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE
          GAMBAR LIKE '%$keyword%' OR
          JUDUL LIKE '%$keyword%' OR
          TAHUN_TERBIT LIKE '%$keyword%' OR
          PENGARANG LIKE '%$keyword%' OR
          GENRE LIKE '%$keyword%' ");
} else {
  //melakukan query
  $buku = query("SELECT * FROM buku");
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
  <title>admin</title>
</head>

<body class="grey darken-2" style="opacity: 80%">
  <div class="navbar-fixed">
    <nav class="black darken-2" style="opacity: 80%">
      <div class="nav-wrapper">
        <div class="container">
          <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <a href="#home" class="brand-logo active center" style="font-family: Vladimir Script">Laman Admin</a>
          <ul>
            <li>
              <form action="" method="GET">
                <input type="text" id="keyword" name="keyword" class="validate white-text" autofocus placeholder="Cari">
                <button type="submit" name="cari" hidden>Cari!</button>
              </form>
            </li>
          </ul>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <img src="" alt="" width="60px">
        </div>
      </div>
    </nav>
  </div>


  <ul id="slide-out" class="sidenav blue">
    <li class="blue">
      <div class="user-view">
        <div class="background">
          <img src="../assets/img/ahmad.png">
        </div>
        <a href="#user"><img class="circle" src="../assets/img/ahmad.png"></a>
        <a href="#name"><span class="white-text name">Fakhri Ahmad </span></a>
        <i class="material-icons">mail</i><a href="#email"><span class="white-text email">193040123.fakhri@mail.unpas.ac.id</span></a>
      </div>
    </li>
    <li style="font-family: Verdana; font-size: 200px;"><a href="tambah.php">Tambah Data</a></li>
    <li style="font-family: Verdana; font-size: 200px;"><a href="logout.php">Logut</a></li>
    <li>
      <div class="divider"></div>
    </li>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger grey darken-2" style="opacity: 80%"><i class="material-icons">menu</i></a>
  <table border="1" cellpadding="13" cellspacing="0" class="highlight">
    <tr class="red">
      <th>#</th>
      <th>opsi</th>
      <th>Gambar</th>
      <th>Judul</th>
      <th>Tahun Terbit</th>
      <th>Pengarang</th>
      <th>Genre</th>
    </tr>
    <?php if (empty($buku)) : ?>
      <tr>
        <td colspan="7">
          <h1>Data Tidak Ditemukan</h1>
        </td>
      </tr>
    <?php else :  ?>
      <?php $i = 1; ?>
      <?php foreach ($buku as $bk) : ?>
        <tr class="grey">
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?NO=<?= $bk['NO']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $bk['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $bk['GAMBAR']; ?>" width="80"></td>
          <td><?= $bk['JUDUL']; ?></td>
          <td><?= $bk['TAHUN_TERBIT']; ?></td>
          <td><?= $bk['PENGARANG']; ?></td>
          <td><?= $bk['GENRE']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <script>
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);
  </script>
</body>

</html>