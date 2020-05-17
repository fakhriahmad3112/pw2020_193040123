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
	<title>Detail</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />
	<link rel="stylesheet" href="../css/style.css">
</head>

<body>
	<div class="container">
		<div class="keterangan">
			<div class="card horizontal">
				<div class="card-image">
					<img src="../assets/img/<?= $buku['GAMBAR'] ?>">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<ul>
							<li><b>KETERANGAN :</b></li>
							<li>JUDUL : <?= $buku['JUDUL'] ?></li>
							<li>TAHUN TERBIT : <?= $buku['TAHUN_TERBIT'] ?></li>
							<li>PENGARANG : <?= $buku['PENGARANG'] ?></li>
							<li>GENRE : <?= $buku['GENRE'] ?></li>
						</ul>
					</div>
					<div class="card-action">
					</div>
				</div>
			</div>
		</div>
		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>
</body>

</html>