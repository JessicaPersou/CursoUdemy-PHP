<?php

class Animal{
    public $som; 
    public $espece;
    public $nome;
    function somDoBicho($som){

       return $this->$som = $som;
    
    }
}

$dog = new Animal();
$dog->nome = "Mel";
$dog->especie = "Cachorra";

echo $dog->nome . "<br>";
echo $dog->somDoBicho("Au aU Au ...");