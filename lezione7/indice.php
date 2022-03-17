<?php
//elenca tutti i file che sono nelle richieste


$files = glob('richieste/*.txt');

//print_r($files);


//stampare tutti i file e per ognuno mettere un link e mostrare il contenuto


echo'<ul>';

    foreach($files as $file){
    echo '<li><a href="scheda.php?file='.$file.'">' .$file.'</a></li>';






    }