<?php 
function imprimir_pino($height) {
$asteric = '';
for ($i=0; $i < $height; $i++) { 
     $asteric .= '*';
     echo $asteric."<br>";
}
}
imprimir_pino(8);
?>