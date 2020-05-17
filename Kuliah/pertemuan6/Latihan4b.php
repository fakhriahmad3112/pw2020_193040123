<!DOCTYPE html>
<html>
<head>
	<title>Latihan 2</title>
</head>
<body>

<?php 

	$hardware = array();

	$hardware[] = "Motheboard";
	$hardware[] = "Processor";
	$hardware[] = "Hardisk";
	$hardware[] = "PC Coller";
	$hardware[] = "VGA Card";
	$hardware[] = "SSD";

 ?>
 	<ol>
 		<?php 
 			for ($i=0; $i < count($hardware) ; $i++) { 
 				echo "<li>$hardware[$i]</li>";
 			}
 		 ?>


 	</ol>

 	<?php 
 		$hasil = array_push($hardware, "Modem","CardReader");
 	 ?>

 	<hr>
 	<ol>
 		<?php 
 			for ($i=0; $i < count($hardware) ; $i++) { 
 				echo "<li>$hardware[$i]</li>";
 			}
 		 ?>


 	</ol>


</body>
</html>