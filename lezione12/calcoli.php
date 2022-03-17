<?php

class Calcoli{

    private $a;
    private $b;

    function __construct($x,$y){
        $this->a=$x;
        $this->b=$y;
    }
    function massimo(){

        if($this->a > $this->b){
            return $this-> a;
        }else{
            return $this ->b;
         } 

    }
    function update(){
        
    }
    
    }

    $calc = new Calcoli(5,30);
    echo 'il massimo è: '.$calc->massimo();

