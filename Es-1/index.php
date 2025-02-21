<?php
/*Modifica l'URL aggiungendo `?nome=Gino` e fai in modo che il PHP stampi:  
`Ciao Gino!` Se il parametro `nome` non è presente, 
stampa un messaggio di default come: `Ciao Sconosciuto!`*/

if (isset($_GET['nome'])) { //se il parametro nome è presente 
    echo "Ciao " . $_GET['nome']; // stampa il nome
    } else { //altrimenti
        echo "Ciao Sconosciuto!"; // stampa il messaggio di default
        } 
?>
