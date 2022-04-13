<?php

// class of object car
class Car{

    public $brand; // metodo publico

    function chooseBrand($brand){ // referenciando ao metodo publico com o this
        $this->brand = $brand;
    }

    function move(){ // metodo dentro da class
        echo "Move car <br>";
    }

    function sum($n1,$n2){ // metodos com parametros
        echo $n1 + $n2;
    }
}
//instance of object car
$heach = new Car(); 
$heach->move(); // chamando o metodo
$heach->chooseBrand("HONDA"); // usando o this no metodo 

$cd = new Car();
$cd->sum(10,10);

$picape = new Car();