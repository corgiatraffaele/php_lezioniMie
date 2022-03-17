
<?php


$testo = "Questo è il testo principale, che contiene tante informazioni utili";
$a = "informazioni" ;
$nuovo = "notizie" ;


echo '<br>';

echo strlen($testo);


echo '<br>';

echo strtoupper($a);

echo '<br>';

echo strpos($testo,"il");

echo '<br>';

$nuovotesto =str_replace("informazioni","notizie","$testo");

echo $nuovotesto;

echo '<br>';

$nome = "arancia" ;
$titolo = "<title>sport per tutti</title>";
$importo = 10.99  ;

echo str_shuffle($titolo);
echo '<br>';
echo ucfirst($nome);
echo '<br>';
echo strip_tags($titolo);
echo '<br>';
echo number_format($importo,$decimals = 1);
 
echo $titolo; //lo stampa nel titolo perchè usa il tag all'interno


