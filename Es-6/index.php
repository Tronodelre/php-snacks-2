<?php
/*Dato l'array $numeri = [1, 5, 8, 12, 15, 20]; Crea un nuovo array con solo i numeri 
**maggiori di 10** usando `array_filter`.*/

$numeri = [1, 5, 8, 12, 15, 20];
$numeriMag = array_filter($numeri, function($numero){
    return $numero > 10;
});

var_dump($numeriMag);
?>