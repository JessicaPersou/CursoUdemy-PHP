<?php

// array foreach

$arr = ['A','B','C','D','E','F','G','H','I'];

foreach($arr as $soma){
    echo  "<br>" . $soma . "<br>";
}


foreach($arr as $indice => $soma){
    echo  "<br>O índice: $indice tem o valor de: " . $soma . "<br>";
}

var_dump($arr);