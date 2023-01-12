<?php $words = array("Carro", "Avion", "Camion");
$word_disorder = array();
for ($i=0; $i < 3; $i++) { 
     $word_disorder[$i] = str_shuffle($words[$i]);
}
print_r($word_disorder);
echo '
<form action = "analisis.php">
<input type="text" name="Word0" id="">
<input type="text" name="Word1" id="">
<input type="text" name="Word2" id="">
<button type="submit">Send</button>
</form>'
 ?>