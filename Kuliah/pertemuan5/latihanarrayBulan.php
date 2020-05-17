<?php  


$bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");

// for ($i=0; $i < count($bulan) ; $i++) { 
// 	echo "Bulan = ".$bulan[$i];
// 	echo "<br>";
// }

// 	echo "<br>";
// 	foreach ($bulan as $namaBulan) {
// 	echo $namaBulan;

// }
	$angka = array(1,2,3,4,5,6);

	$hasil = array_pop($bulan);
	print_r($bulan);
	echo "<hr>";

	$hasil = array_push($angka, 7,8,9,10);
	print_r($angka);
	echo "<hr>";

	//menurun Descending
	$hasil = rsort($angka);
	print_r($angka);
	echo "<hr>";

	//menaik Ascending
	$hasil = sort($angka);
	print_r($angka);
	echo "<hr>";

	$bulan = sort($bulan);
	print_r($bulan);












?>