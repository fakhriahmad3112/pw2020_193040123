<?php  
	//Kubus pertama 
	// $sisi1 = 9;
	
	//Kubus kedua 
	// $sisi2 = 4;

	//luas ke 1
	// $luas_kb1 = $sisi1*$sisi1*6;

	//luas ke 2
	// $luas_kb2 = $sisi2*$sisi2*6;

	// fungsi tambah 2 luas kubus
	// $total_luas = $luas_kb1+$luas_kb2;
	// echo "Total Luas = ".$total_luas;

	// echo "Total Luas = ".tambahluas2kubus($luas_kb1,$luas_kb2);

	// function tambahluas2kubus($luas1, $luas2)
	// {
	// 	$total_luas = $luas1+$luas2;
	// 	return $total_luas;
	// }

	//Kubus pertama
	$sisi1 = 9;

	//Kubus kedua
	$sisi2 = 4;

	echo "total luas = ".luaskubus($sisi1,$sisi2,6);

	function luaskubus($sisi1, $sisi2)
	{
		$total_luas = $sisi1*$sisi2*6;
		return $total_luas;
	}

?>