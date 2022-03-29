<?php

use Engim\Corso2021\MyClass;

require('engim/corso2021/MyClass.php');

require('engim/corso2022/MyClass.php');

$class_2021= new \Engim\Corso2021\MyClass ;

$class_2021->Stampa();


$class_2022= new \Engim\Corso2022\MyClass;   //il namespace dato a class 2022

$class_2022-> Stampa();


