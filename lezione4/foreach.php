<?php

//sintassi foreach quando usiamo un array associativo

$colori_dei_frutti=["mela"=>"rosso",
        "banana"=>"giallo",
        "pera"=>"verde"
        ];

//se vogliamo aggiungere un elemento:
$colori_dei_frutti["arancia"]= "arancione";

//come posso sfogliare l'array?

foreach($colori_dei_frutti as $colore){

        echo $colore . "<br>"; 

}
foreach($colori_dei_frutti as $frutto => $colore){ //(..as $key => $value)

    echo "il ". $frutto . " ha come colore ". $colore . "<br>";

}



echo "<br>";

//array => estrarre le chiavi
//usiamo  array keys per estrarre tutte le chiavi da un array 
// e dopo con un ciclo prendiamo tutti i valori degli array usando le chiavi.
//secondo il principio che se scrivo:
//echo $colori_dei_frutti['mela'] ottengo giallo

$frutto = 'mela';

echo $colori_dei_frutti[$frutto]. '<br>'; 

$frutti = array_keys($colori_dei_frutti);

print_r($frutti);

foreach($frutti as $frutto){

echo "il ". $frutto . " ha come colore ". $colori_dei_frutti[$frutto] . "<br>";
}

