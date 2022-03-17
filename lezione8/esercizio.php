<?php

$dirs=[
    'aziende'=>['ford','peugeot'],
    'persone'=>['carla','mario']
];
 

foreach($dirs as $dir =>$subdirs){

 
    
    foreach($subdirs as $subdir ){

            $test=$dir.$subdir;
        mkdir($test,0777,true,null);


    }

    };