<?php

// const não mudam e são definidas com letras maiusculas

class User{
    public const CPF = 111222333444; // declarada sem $
    public $nome;

    function cpfValido(){
        echo self::CPF . "<br>"; // quando é metodo usa self ao invez do this
    }

}

$pessoa = new User();
$pessoa->nome = "Jessica";

echo $pessoa->nome. "<br>";
echo $pessoa::CPF . "<br>" ; // dessa forma é acessada a contante
$pessoa->cpfValido();
