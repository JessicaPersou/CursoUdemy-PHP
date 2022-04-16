<?php

trait obj{
public function teste(){
    echo "teste <br>";

}

}

class central {

    use obj;
}
$t= new central;

$t->teste();