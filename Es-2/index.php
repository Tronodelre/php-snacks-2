<?php 

/*Scrivi uno script PHP che prenda un numero da `$_GET` (es: `?min=5`) e stampi tutti i numeri 
da questo `min` fino a 20. Se `min` non è fornito, il valore di default è `1`.*/


while ($_GET['min'] <= 20) {
    echo $_GET['min'];
    $_GET['min']++;
    }
?>
