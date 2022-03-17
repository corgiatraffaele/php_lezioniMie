<?php

$a = 32;
$b = 12;
$c = $a + $b;

echo "la variabile c vale: " . $c . "<br>";

$nome = "Raffaele Vittorio";
$cognome = "Corgiat Loia Brancot";

echo strlen ($nome)."<br>";
echo strlen($cognome)."<br>";

$lengNome = strlen($nome);
$lengCognome = strlen($cognome);

if ($lengNome > $lengCognome){
  echo  "il mio nome è più lungo del cognome";

}elseif($lengNome < $lengCognome){
   echo "il mio cognome è più lungo del cognome";

}else{
   echo "il mio nome e cognome sono di  uguali lunghezza";
}