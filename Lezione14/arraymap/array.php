<?php



$dati=['Matteo','Franca'];

$dati=array_map('strtolower',$dati); 

//passi l'array e lo rende tutto minuscolo

var_dump($dati);


function lista($stringa,$item){

    return $stringa. '<li>'.$item. '</li>';
}

echo array_reduce($dati,'lista');// applica la funzione passandogli i valori che sono stati restituiti da $lista

//array_merge unisce gli array

//array_flip scambia i valori degli array