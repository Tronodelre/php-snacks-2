<?php
/* Funzione quadrato() Scrivi una funzione PHP chiamata `quadrato($numero)` 
che riceve un numero e restituisce il suo quadrato.*/
function quadrato($numero) {
    return $numero * $numero;
    }

$ema = $_GET ["num"];
echo quadrato($ema);
?>