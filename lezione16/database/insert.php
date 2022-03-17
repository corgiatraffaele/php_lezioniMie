<?php

include('connessione.php');

$stringhe = ['treno','pistola','aereoplano','civitavecchia'];


//aggiungere una nuova riga alla tabella
$stmt = $mysqli->prepare('INSERT INTO cars (id, model, year) VALUES (NULL, ?, ?)');

$stmt->bind_param("ss",$model, $year);

//genero una stringa casuale


for($i=0;$i<50000;$i++){

//genero una stringa casuale

$stringa=$stringhe[rand(0,3)];
$stringa=str_shuffle($stringa);
//immagazzinimamo la $stinga in model
$model = $stringa;

//crea un numero random tra 2000 e 2008
$year =  rand(2000,2008);

 //esegue la insert
$stmt->execute();
}