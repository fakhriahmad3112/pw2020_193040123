<?php 

	$mahasiswa = [
	
	[
		'nama' => 'Sandhika Galih',
		'nrp' => '043040023',
		'email' => 'sandhikagalih@unpas.ac.id',
		'jurusan' => 'Teknik Informatika'
	],
	[
		'nama' => 'Doddy Ferdiansyah',
		'nrp' => '144040004',
		'email' => 'doddy@gmail.com',
		'jurusan' => 'Teknik Mesin'
	],
   ];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>UTS no 2</title>
 </head>
 <body>
 		<?php 
 			$i = 1;
 			foreach ($mahasiswa as $daftar) {
 				echo "<ul>";
 				echo "<li>".$i."</li>";
 				echo "<li> Nama : ".$daftar['nama']."</div>";
 				echo "<li> NRP : ".$daftar['nrp']."</div>";
 				echo "<li> Email : ".$daftar['email']."</div>";
 				echo "<li> Jurusan : ".$daftar['jurusan']."</div>";
 				echo "</ul>";
 			$i++;
 			}

 		 ?>
 </body>
 </html>