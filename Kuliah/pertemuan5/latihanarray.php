<?php  
	

	//array 1 dimensi
	$arah = array("kanan","kiri");
	$arah[2] = "atas";
	// echo $arah;
	$arah[] = "bawah";
	
	$arah[1] = "kanan";
	$arah[0] = "kiri";

	echo "Panjang Array = ".count($arah);
	echo "<br>";
	print_r($arah);
	echo "<br>";

	for ($i=0; $i < count($arah) ; $i++) { 
		echo "Arah = ".$arah[$i];
		echo "<br>";
	}

	echo "<br>";

	foreach ($arah as $namaarah ) {
		echo $namaarah;
	}

	//array multidimensi 

	// $mahasiswa = array();
	// $mahasiswa[0][0] = "193040123";
	// $mahasiswa[0][1] = "Fakhri Ahmad";
	// $mahasiswa[1][0] = "Kota Bandung";
	// $mahasiswa[1][1] = "081324053260";

	// print("<pre>".print_r($mahasiswa,true)."</pre>");

	// echo "Nama : ".$mahasiswa[0][1];
	// echo "<br>";
	// echo "Kota : ".$mahasiswa[1][0];

	// for ($i=0; $i < count($mahasiswa); $i++) { 
	// 	for ($j=0; $j < count($mahasiswa); $j++) { 
	// 		echo $mahasiswa;
	// 		echo "<br>";
	// 	}
	// }


?>