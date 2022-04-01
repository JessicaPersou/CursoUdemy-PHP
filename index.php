<?php

//conferir se o arquivo é um inteiro
if (is_int(5)){
    echo "É um número inteiro! ";
}

echo"<br>";

//conferir se é float
if (is_float(5.0)){
    echo "É um número flutuante! ";
}


echo"<br>";

//conferir se é string
if (is_string("O")){
    echo "É uma string! ";
}

echo"<br>";

//conferir se é boolean
$boolean = true;

if (is_bool($boolean)){
    echo "É um booleano! ";
}


// para imprimir uma variavel dentro de uma frase com string é usado "
$nome = "Jessica";
echo"<br>";
echo "O nome dela é: $nome!";

// arrays dos dados nem sempre do mesmo tipo
echo"<br>";

$arrays = [1,2,3];
print_r($arrays);

echo"<br>";

$variados = ["Nome", 2, true];
print_r($variados);
echo"<br>";
print_r($variados[0]);

echo"<br>";

//array associativo
$associativo = [
    'nome' => 'Jessica',
    'idade' => 29,
    'casada' => true,
];

print_r($associativo);