
<?php

//metteremo il codice per ricevere i dati

if($_SERVER['REQUEST_METHOD']=='POST'){


    echo 'devo elaborare i dati';
   /*  echo $_REQUEST['q'];
    print_r($_REQUEST); */


    $filename = 'richieste/'.uniqid().'.txt';
    
    $content= "q :". $_REQUEST['q']. "\n";
    file_put_contents($filename,$content,FILE_APPEND);

    echo "dati ricevuti";

/* 
    $content= "radio :". $_REQUEST['radio']. "\n";
    file_put_contents('dati.txt',$content,FILE_APPEND); */


//voglio salvare questi dati in un file
  
    }else{

    

?>


<!-- /*action vuota considea lo stesso file specifica l'url che riceve i dati
methodo post i dati son passati come dati, se get passati come url -->
<form action="" method="post">
   
    Inserisci i dati:
    <input type="text" name="q">
    <input type="submit">

    <input type="radio" name="radio">

</form>



<?php
}