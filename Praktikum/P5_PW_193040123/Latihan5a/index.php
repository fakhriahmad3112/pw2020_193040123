<?php 
    // Melakukan koneksi ke database
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");  

    // Memilih database
    mysqli_select_db($conn, "tubes_193040123") or die("Database salah!");

    // query mengambil objek dari tabel di dalam database
    $result = mysqli_query($conn, "SELECT * FROM buku");
?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Latihan 5a</title>
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
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><img src="assets/img/<?= $row["GAMBAR"]; ?>"></td>
                    <td><?= $row["JUDUL"]?></td>
                    <td><?= $row["TAHUN TERBIT"]?></td>
                    <td><?= $row["PENGARANG"]?></td>
                    <td><?= $row["GENRE"]?></td>
                </tr>
            <?php $i++ ?>    
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>