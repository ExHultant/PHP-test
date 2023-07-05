<?php

$horas = readline("Ingrese el numero de horas: ");

$minutos = readline("Ingrese el numero de minutos: ");

$segundos = readline("Ingrese el numero de segundos: ");

$totalSegundos = ($horas*3600)+($minutos*60)+($segundos);

echo "El total de segundos es $totalSegundos";

?>