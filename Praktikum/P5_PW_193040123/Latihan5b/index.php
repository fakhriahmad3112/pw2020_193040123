<?php 

    require 'php/functions.php';

    $buku = query("SELECT * FROM buku")

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Latihan 5b</title>
    <link rel="stylesheet" href="css/style.css">
 </head>
 <body>
    <div class="container">
        <h1><center>Daftar Buku Novel Terpopuler</center></h1>
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>NO</th>
                <th>GAMBAR NOVEL</th>
                <th>JUDUL</th>
                <th>TAHUN TERBIT</th>
                <th>PENGARANG</th>
                <th>GENRE</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach ($buku as $bk) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $bk["GAMBAR"]; ?>"></td>
                    <td><?= $bk["JUDUL"]?></td>
                    <td><?= $bk["TAHUN TERBIT"]?></td>
                    <td><?= $bk["PENGARANG"]?></td>
                    <td><?= $bk["GENRE"]?></td>
                </tr>
            <?php $i++ ?>    
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
