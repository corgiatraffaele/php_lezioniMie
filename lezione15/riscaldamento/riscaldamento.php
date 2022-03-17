<?php
include 'config.php';
include 'form.php';

$form= new Form($path);
//print_r($_SERVER);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $result= $form->save();
    if($result['status']=='OK'){
        echo "abbiamo ricevuto i suoi dati </br>" ;
        echo '<a href="list.php">lista</a>';
    } else {
        echo 'c\è stato un problema: ' . $result['message'];
    }
} else {
    echo $form->display();
}