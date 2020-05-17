<?php  

	//phi
	$PHI = 3.14;

	//linkaran pertama
	$jari1 = 5;

	//luas ke 1
	$luas1 = LuasLingkaran($PHI,$jari1);
	
	//lingkaran kedua
	$jari2 = 7;

	//luas ke 2
	$luas2 = LuasLingkaran($PHI,$jari2);
	
	//fungsi tambah 2 luas lingkaran

	echo "Total 2 Luas = ".Tambahluas2Lingkaran($luas1,$luas2);

	function Tambahluas2Lingkaran($luas1, $luas2)
	{
		$total2Luas = $luas1+$luas2;
		return $total2Luas;
	}

	function LuasLingkaran($PHI, $jari)
	{
		$luas = $PHI*$jari*$jari;
		return $luas;
	}

?>