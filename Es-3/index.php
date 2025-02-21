<?php 
//Stampare le chiavi e i valori usando un ciclo `foreach`.

$persona = [
    "nome" => "Gino",
    "cognome" => "Panino",
    "eta" => 25
    ];

foreach ($persona as $chiave => $valore) {
    echo "$chiave: $valore <br>";
};


?>
