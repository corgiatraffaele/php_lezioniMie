<?php 
for($i= 0; $i<10; $i++){
    echo "la variabile i vale " .$i. "<br>";
}



//esercizio scrivere i numeri da 1 a 20 in una stella riga

for($i=1; $i<=20; $i++){
    echo $i." <br>";
      }
//scriver un programma che stampi il contenuto dell'array numbers

$numbers = [1,2,3,4,5,523,24342];
$size = count($numbers);

for($i= 0;$i<$size; $i++){
    echo $numbers[$i] . " ";
    }
echo "<br>";

$numbers = [41,42,34,4,5,523,24342];

foreach($numbers as $number){
    echo $number . " ";

}

//es 5
echo '<hr>';
echo "stampa la somma di tutti i numeri dell'array ";
$tot = 0; 

$numbers = [41,42,34,4,5,523,24342];
foreach($numbers as $number){
    $tot+= $number;
    
}
echo "la somma vale ". $tot ."<br>";
echo '<hr>';