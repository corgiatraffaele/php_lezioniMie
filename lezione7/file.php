<?php

$testo= file('file.txt');


if($testo=== false){
    
    echo"errore leggendo il file";
}else{
    echo 'la riga 5 è:'.$testo[4];
    
    
}

//$testo2=file("https://www.lastampa.it/");


//echo"il titolo:". $testo2[1985];


//file_get_contents(legge tutto il testo in una stringa e non array)

//$testo2=file_get_contents("https://www.lastampa.it/");
//echo $testo2;      


$immagine = file_get_contents("img.jpg");
echo $immagine;
file_put_contents("img.jpg",$immagine);


