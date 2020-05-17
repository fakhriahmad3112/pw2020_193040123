<?php 

$ktp = $_GET['ktp'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];

 ?>
 <table>
 	<h2><center>Daftar Peserta</center></h2>
 	<tr>
 		<td>No.KTP</td>
 		<td>: <?= $ktp ?></td>
 	</tr>
 	<tr>
 		<td>Nama</td>
 		<td>: <?= $nama ?></td>
 	</tr>
 	<tr>
 		<td>Alamat</td>
 		<td>: <?= $alamat ?></td>
 	</tr>
 </table>