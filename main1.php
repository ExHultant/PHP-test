<?php  
$edades = [
     4,
     5,
     7,
     10,
     'undefined age'
 ];
 
 function espacios_correspondientes_en_la_bodega (array $edades) {
     for ($i = 0; $i < count($edades); $i++) {
         if(is_int($edades[$i])) {
             if ($edades[$i] < 5) {
                 echo "<br>guarde sus juguetes en la parte inferior de la bodega.<br>";
             } elseif ($edades[$i] >= 5 && $edades[$i] <= 7) {
                 echo "<br>guarde sus juguetes en la parte media de la bodega.<br>";
             } else {
                 echo "<br>guarde sus juguetes en la parte alta de la bodega.<br>";
             }
         } else {
             echo "<br>guarde sus juguetes en la bodega de al lado.<br>";
         }
     }
 }
 
 espacios_correspondientes_en_la_bodega ($edades);
?>