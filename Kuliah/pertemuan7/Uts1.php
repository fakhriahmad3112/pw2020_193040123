<?php 

	
	function kotak_bintang($a){
		
	

	for ($i=1; $i <= $a ; $i++) { 
		for ($j=0; $j < $i ; $j++) { 
			echo "*";
			}echo "<br>";
	}
}

	kotak_bintang(5);

 ?>