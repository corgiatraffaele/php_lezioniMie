<?php


/* $massimo=0;

function massimo(int...$numbers){

            return max($numbers);

}

echo 'il massimo è: '. massimo(4,5,6,-2,1,2,34) . '<br>';
 */

/* 
scrivere una funzione ricorrenze() che ricevendo una stringa di parole conti le ricorrenze delle singole parole e restituisca come risultato un array associativo
in cui la chiave � una parola e il valore � il numero di volte che la parola compare nella stringa originaria:
(si usi la funzione split()) */



$testo="scrivere una funzione ricorrenze che ricevendo una stringa di parole conti le ricorrenze delle singole parole e restituisca come risultato un array associativo
in cui la chiave una parola e il valore il numero di volte che la parola compare nella stringa originaria si usi la funzione split";


 function ricorrenze($testo){
    $parole=explode(' ', $testo);
 
    foreach($parole as $parola){

        if(isset($ricorrenze[$parola])){
        $ricorrenze[$parola]++;
        }else { 

            $ricorrenze[$parola]=1;

        }

    }
        return($ricorrenze);
  
}

echo "<pre>";
print_r(ricorrenze($testo));