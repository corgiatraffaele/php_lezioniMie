<?php
session_start();
if (isset($_GET['word'])){
    $_SESSION['phrase'].=$_GET['word'] . ' ';
    
   
}
header('location:frase.php');
