<?php

$mysqli = new mysqli('localhost', 'lezione15', 'lezione15', 'lezione15');

echo $mysqli->host_info;

echo '<pre>';
//assegna alla variabile 
$result = $mysqli->query('SELECT * from users limit 10');

print_r($result);


   
//$row = $result-> fetch_array(MYSQLI_BOTH);// fa vedere i nomi ed i campi delle chiavi di una riga
//$row = $result-> fetch_array(MYSQLI_NUM); //fa veder le posizioni 
//$row = $result-> fetch_array(MYSQLI_ASSOC);// fa vedere i valori//scorciatoia fetch_assoc

//-------->MODO GIUSTO<-----------------
//fino a quando ci sono righe con il fetch vai alla riga dopo 
//e printala

while($row = $result-> fetch_assoc()){
    
echo "<li>".$row['fisrtname']." ".$row['lastname']." ".$row['email']."</li>";


}




