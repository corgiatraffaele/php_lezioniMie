<?php


/*session_start()

salva in automatico il superglobal $_SESSION[]
le salva in cookie
*/

session_start();
 if(!empty($_SESSION['count'])){

    $_SESSION['count'] ++;
 }else{

    $_SESSION['count']=1;

    
 }
  echo 'il conteggio vale '. $_SESSION['count'];