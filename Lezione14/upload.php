<?php

//echo "<pre>";
//var_dump($_FILES);

$uploadFile= 'iscrizioni/'.$_FILES['fileToUpload']['name'];
if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadFile)){
     echo "file caricato";
     }else{
        echo 'c\'è stato un problema';

     }