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
			<<table>

				<tr>
					<td>
						<p>JUDUL Buku</p>
					</td>
					<td>
						<p>:</p>
					</td>
					<td>
						<p><?= $buku["JUDUL"]; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Tahun Terbit</p>
					</td>
					<td>
						<p>:</p>
					</td>
					<td>
						<p><?= $buku["TAHUN TERBIT"]; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Pengarang</p>
					</td>
					<td>
						<p>:</p>
					</td>
					<td>
						<p><?= $buku["PENGARANG"]; ?></p>
					</td>
				</tr>
				<tr>
					<td>
						<p>Genre</p>
					</td>
					<td>
						<p>:</p>
					</td>
					<td>
						<p><?= $buku["GENRE"]; ?></p>
					</td>
				</tr>

				</table>
		</div>
		<button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
	</div>
</body>

</html>