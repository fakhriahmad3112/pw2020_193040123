<?php  

$tulisan = 
"Balonku ada lima <br>
rupa rupa warnanya <br> 
hijau kuning kelabu <br> 
merah muda dan biru <br> 
meletus balon hijau DOR ! <br> 
hatiku sangat kacau <br> 
balonku tinggal empat <br> 
kupegang erat erat";

$tulisan1 = str_replace("a", "o", $tulisan);
$tulisan2 = str_replace("i", "o", $tulisan1);
$tulisan3 = str_replace("u", "o", $tulisan2);
$tulisan4 = str_replace("e", "o", $tulisan3);

echo "$tulisan";

?>