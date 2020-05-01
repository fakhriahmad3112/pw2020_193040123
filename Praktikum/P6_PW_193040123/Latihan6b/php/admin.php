<?php
//menghubungkan dengan file php lainnya
require 'functions.php';
//melakukan query
$buku = query("SELECT * FROM buku");

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
    <?php $i = 1; ?>
    <?php foreach ($buku as $bk) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href=""><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $bk['GAMBAR']; ?>" alt=""></td>
        <td><?= $bk['JUDUL']; ?></td>
        <td><?= $bk['TAHUN TERBIT']; ?></td>
        <td><?= $bk['PENGARANG']; ?></td>
        <td>Rp <?= $bk['GENRE']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>
  </table>
</body>

</html>