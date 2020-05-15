<?php

require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>

<table border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>NO</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color: red; font-style: italic;">Data Mahasiswa Tidak Ditemukan!</p>
      </td>
    </tr>
  <?php endif; ?>

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