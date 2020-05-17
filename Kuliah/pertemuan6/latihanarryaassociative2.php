<?php

	echo "BIODATA FAKHRI AHMAD";
	echo "<hr>";

	$Fakhri = array(
		"TTL" => "Purwakarta, 31 Desember",
		"Alamat" => "Rancekek",
		"Status" => "Mahasiswa",
		"No_HP" => "0813XXXXXXXXXX",
		"Cita_cita" => "Pengusaha",
		"Hoby" => "Photography",
		"Makanan_Favorite" => "Nasi Goreng",
		"Instagram" => "@fakhri_ahmad31",
		"Email" => "xtkr4fakhriahmad@gmail.com",
		"Lagu_Favorite" => "Avenged Sevenfold"

	);

	foreach ($Fakhri as $Biodata => $isi) {
		echo "$Biodata : $isi <br>";
	}

  ?>