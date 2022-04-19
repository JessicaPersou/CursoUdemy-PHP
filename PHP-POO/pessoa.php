<?php

class Pessoa{

    public $name;
    public $age;

    function walk(){
        echo "walking dead <br>";
    }

	/**
	 */
	function __construct() {
	}
}

$jessica = new Pessoa();

$jessica->name = "Jessica";
$jessica->age = 12;

$jessica->walk();