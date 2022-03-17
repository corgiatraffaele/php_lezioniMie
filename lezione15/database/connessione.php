<?php

//due modi per fare la stessa cosa!:
//1)
//mysqli_connect() connect per collegare il database PROCEDURALE

//host, user, psw, database
$link = mysqli_connect('localhost', 'lezione15', 'lezione15', 'lezione15');

echo mysqli_get_host_info($link);

mysqli_close($link);


echo '<hr>';

//2)
//approccio ad oggetti


$mysqli = new mysqli('localhost', 'lezione15', 'lezione15', 'lezione15');

echo $mysqli->host_info;

$mysqli->close();
