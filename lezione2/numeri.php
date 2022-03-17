<h1>Numeri</h1>

<?php

$a = 1; // definita variabile a 

echo "la variabile a vale =" . $a; // il . concatena
echo "<br>";

echo ++$a;
echo "<br>";

echo $a++;
echo "<br>";

echo $a;

?>


<h1>Float Operazioni</h1>
<?php
//definiamo una var costo orario e una per durata
$costo_orario = 23.67;
$durata = 45.34;


$costo_totale = $costo_orario * $durata;

echo $costo_totale;

echo "<br>";
//arrotondare il risultato a due decimali 

echo round($costo_totale,2);


//in alternativa possiamo calcolare il costo arrotondato e stampato
echo "<br>";

$costo_totale_arrotondato = round($costo_totale,2);

echo $costo_totale_arrotondato;


echo "<br>";
//invece di round usare number_format per stampare due decimali

$costo_totale_arrotondato_format = number_format($costo_totale,2,",",".");

echo $costo_totale_arrotondato_format;

