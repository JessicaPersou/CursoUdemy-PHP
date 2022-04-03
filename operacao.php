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

echo "OPERAÇÕES: <br>";
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