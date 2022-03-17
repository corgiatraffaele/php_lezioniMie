<?php

class Person{

    private $nome='';
    private $età=0;

    function setName(string $stringa){
         $this ->name =$stringa;
    }
    function setAge(int $num){
        $this->age=$num;
    }
    function getData():string{
        return 'il nome: ' .$this->name . ' età: '.$this->age;
    }

}
$p1 =new Person ();
$p1-> setName('Mario');
$p1-> setAge(12);

echo $p1-> getData();

echo '<br>';


class Car{

    private $model='';
    private $manufacturer='';

    function setModel(string $stringa){
         $this ->model =$stringa;
    }
    function setManufacturer(string $string){
        $this->manufacturer=$string;
    }
    function getData():string{
        return 'il modello: ' .$this->model . ' casa costuttrice: '.$this->manufacturer;
    }

}
$c1 =new Car ();
$c1-> setModel('Giulietta');
$c1-> setManufacturer('Alfa Romeo');

echo $c1-> getData();
