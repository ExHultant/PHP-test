<?php print_r($_REQUEST);
$words = array("Carro", "Avion", "Camion"); 
if ($_REQUEST["Word0"] == $words[0]) {
     echo 'La palabra es Correcta';
} else    {
     echo 'Error es incorrecta';
}
 if ($_REQUEST["Word1"] == $words[1])   {
     echo 'La Palabra es correcta';
} else    {
     echo 'Es incorrecta'; 
} if ($_REQUEST["Word2"] == $words[2])   {
     echo 'La Palabra es Correcta';
} else    {
     echo 'Es incorrecta la Palabra';
}
?>