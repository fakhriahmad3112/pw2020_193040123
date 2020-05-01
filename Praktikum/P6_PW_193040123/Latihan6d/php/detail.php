<?php 

	if (!isset($_GET['NO'])) {
		header("location: ../index.php");
		exit;
	}

	require 'functions.php';

	$NO = $_GET['NO'];

	$buku = query("SELECT * FROM buku WHERE NO = $NO")[0];

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
      <div class="gambar">
      	<img src="../assets/img/<?= $buku["GAMBAR"]; ?>" alt="">
      </div>
      <div class="keterangan">
	        <p><?= $buku["JUDUL"]?></p>
	        <p><?= $buku["TAHUN TERBIT"]?></p>
	        <p><?= $buku["PENGARANG"]?></p>
	        <p><?= $buku["GENRE"]?></p>
	     </div>
	     <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>
