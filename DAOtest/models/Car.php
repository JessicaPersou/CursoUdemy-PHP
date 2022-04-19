<?php

class Car{

    private $id;
    private $brand;
    private $km;
    private $color;

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }


}