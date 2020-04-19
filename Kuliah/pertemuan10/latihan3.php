<?php

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Admin</title>
</head>

<body>

  <h1>Daftar Mahasiswa</h1>
  <a href="tambah.php">Tambah Data Mahasiswa</a>
  <br><br>

  <table border="1" cellpadding="10" cellspacing="0">

    <tr>
      <th>NO</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td><img src="img/<?= $mhs["gambar"]; ?>" width="100"></td>
        <td><?= $mhs["nama"]; ?></td>
        <td>
          <a href="detail.php?id=<?= $mhs['id']; ?>">Lihat Detail</a>
        </td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

  </table>

</body>

</html>