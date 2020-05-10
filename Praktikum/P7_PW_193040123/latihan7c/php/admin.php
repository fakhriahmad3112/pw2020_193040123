<?php

session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}

//menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $buku = query("SELECT * FROM buku WHERE
          GAMBAR LIKE '%$keyword%' OR
          JUDUL LIKE '%$keyword%' OR
          TAHUN TERBIT LIKE '%$keyword%' OR
          PENGARANG LIKE '%$keyword%' OR
          GENRE LIKE '%$keyword%' ");
} else {
  //melakukan query
  $buku = query("SELECT * FROM buku");
}
?>

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>admin</title>
</head>

<body>
  <div>
    <a href="tambah.php"><button>Tambah Data</button></a>
  </div>
  <div class="logout">
    <a href="logout.php">Logout</a>
  </div>
  <form action="" method="GET">
    <input type="text" id="keyword" name="keyword" class="validate" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <table border="1" cellpadding="13" cellspacing="0">
    <tr>
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
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $book['id']; ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $book['id']; ?>" onclick="return confirm('Hapus Data?')"><button>Hapus</button></a>
          </td>
          <td><img src="../assets/img/<?= $bk['GAMBAR']; ?>" alt=""></td>
          <td><?= $bk['JUDUL']; ?></td>
          <td><?= $bk['TAHUN TERBIT']; ?></td>
          <td><?= $bk['PENGARANG']; ?></td>
          <td>Rp <?= $bk['GENRE']; ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>
    <?php endif; ?>
  </table>
</body>

</html>