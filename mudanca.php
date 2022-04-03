<?php 
echo "Mudança de tipo implícita: é chamado de autocast<br>";
    echo 5 / 2;
    echo "<br>";

    if(is_float(5/2)) {
        echo "É float <br>";
    }

    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)) {
        echo "É string <br>";
    }

// o . serve como concatenação

    $nome = "Jessica";
    $sobrenome = "Sousa";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";

    