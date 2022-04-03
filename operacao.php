<?php

$valor1 = 5;
$valor2 = 5;

$soma = $valor1 + $valor2;
$sub = $valor1 - $valor2;
$div = $valor1 / $valor2;
$multi = $valor1 * $valor2;

$v1 = 81;
$v2 = 5;
$resto = $v1 % $v2;

$expo = $valor1 ** $valor2;
$concatenar = $valor1 . $valor2;
$valor1++;
$valor2--;

echo "OPERAÇÕES DE EXPRESSÃO: <br>";
echo "<br>";
echo "Soma -> 5 + 5 = ". $soma . "<br>";
echo  "Subtração -> 5 - 5 = " . $sub . "<br>";
echo  "Divisão -> 5 / 5 = " . $div . "<br>";
echo  "Multiplicação -> 5 * 5 = " . $multi . "<br>";
echo  "Resto da Div -> 81 % 5 = " . $resto . "<br>";
echo "Exponenciação -> 5 ** 5 = ". $expo . "<br>";
echo "Concatenar -> 5 . 5 = ". $concatenar . "<br>";
echo "Incremento -> 5  = ". $valor1 . "<br>";
echo "Decremento -> 5  = ". $valor2 . "<br>";

echo "<br>";
echo "<br>";
echo "OPERADORES DE COMPARAÇÃO: <br>"; // pode ser usador para comparar qualquer tipo de valor, string, array, float e int.
$valor1 = 5;
$valor2 = 5;

echo "<br>";

if($valor1 === $valor2){
    echo "Identico (===)<br>";
}

if($valor1 == $valor2){
    echo "Igual (==)<br>";
}

if($valor1 !== $v1){
    echo "Diferente (!=) <br>";
}

if($v1 > $valor2){
    echo "Maior (>)<br>";
}

if($valor1 < $v1){
    echo "Menor (<)<br>";
}

if($v1 >= $valor2){
    echo "Maior igual (>=)<br>";
}

if($valor1 <= $v1){
    echo "Menor igual (<=)<br>";
}

echo "<br>";
echo "<br>";
echo "OPERADORES DE LÓGICOS: <br>"; 
echo "<br>";
if($valor1 == $valor2 && $v1 > $v2){
    echo "Operador AND && (Dois valores tem que ser verdadeiros!)<br>";
}
if($valor1 == $valor2 || $v1 < $v2){
    echo "Operador OR || (Um dos valores verdadeiros!)<br>";
}
if(! $v1 < $v2){
    echo "Operador NOT ! (Valores Falsos!)<br>";
}
echo "<br>";
echo "<br>";
echo "OPERADORES CAST: <br>"; // ele força a conversão de dados seja qual for 
echo "<br>";

$v5 = (int) "5";
if($valor1 === $v5){
    echo "Operador de Cast verificando se é identico!";
}

echo "<br>";
echo "<br>";
echo "OPERADORES DE ATRIBUIÇÃO: <br>";

echo "Soma += " . $soma; // como se fosse o número operado pelo operador dele novamente 
echo "<br>";
echo "Subtração -= " . $sub;
echo "<br>";
echo "Divisão /= " . $div;
echo "<br>";
echo "Multiplicação *= " . $multi;
echo "<br>";
echo "Resto da divisão %= " . $resto;

echo "<br>";
echo "<br>";
echo "OPERADORES DE TERNÁRIO: <br>"; // pode ser usado com qualquer valor
echo 20 > 10 ? "Verdadeiro": "Falso";
echo "<br>";
echo 20 == 10 ? "Verdadeiro": "Falso";