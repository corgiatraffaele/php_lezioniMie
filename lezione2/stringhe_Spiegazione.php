<h1>Stringhe PHP </h1>

<?php

$a = 1;
 
echo $a;

echo '<br>';

//Vari modi per scrivere il valore della variabile con un commento 
//primo metodo stampo l'etichetta in html e poi apro il php al bisogno 
?>

La variabile $a vale: <?php echo $a ?> <br>

<?php 

//la stessa cosa con la sintassi abbreviata  {miglior scelta} ?> 

La variabile $a vale: <?= $a?> <br>

<?php

//concatenando le stringhe di etichetta e la variabile  {miglior scelta}

echo 'La variabile $a vale: '. $a . '<br>';



//usando gli apici doppi (e il carattere di escape al bisogno)

echo "La variabile \$a vale: $a <br>";


//usando printf  %d serve per dare il valore della variabile
printf('la variabile $a vale: %d %d',$a ,12);


echo '<br>';
 

//strlen scrive il numero di caratteri (in questo caso 14)
echo strlen('buona giornata');


echo '<br>';


//strpos determina l aposizione di una stringa in un altra stringa
//quindi in questo caso restituisce 3
echo strpos('la storia della gabbianella','storia');


echo '<br>';
//ritorna parte di una stringa
//ritorna la porzione di stringa da offset e lenght
//(dammi una porzione di stringa da offset a xcaratteri)
//es. ho dei codici in cui i primi 4 char non significano nulla e voglio estrarre dal quinto

echo substr ('TRIS0345'. 4,4);
echo '<br>';

$code= "TRIS0345";
echo substr ($code,4,4);


//se non sapessi a priori quante cifre ci sono dopo la 
//sottostringa TRIS come posso modificare la mia funzione?
//Voglio che funzioni per questi codici e per altri ancora che non son quanto ///siano lunghi 



echo substr ('TRIS0345541564668',4);



echo '<br>';
// maiuscolo e minuscolo


echo strtolower ('QUESTO TESTO ERA MAIUSCOLO') . '<br>';

echo strtoupper ('questo testo era minuscolo') . '<br>';
