<?php

// variavel da variavel (pode criar variavel dinamicamente)
$x = "nome"; // valor de nome da nome a variavel
echo "$x <br>"; 

$$x = "Jessica"; // variavel com o nome de nome. com o novo valor de Jessica
echo "$nome <br>";

//variavel por referência (quando as duas apontam para o mesmo ponto de inicio)
echo "<br> Variavel por referência Y, recebe o valor de X:";
$x = 10;
$y =& $x; // y recebe o mesmo valor de x

echo "<br>";
echo $y;
echo "<br>";
echo $x;

echo "<br> Mudando os valores de uma Ref: Y <br>";


$y = 20;
echo $y;
echo "<br>";
echo $x;
echo "<br>";
echo "Mudando os valores de uma Ref: X ";
echo "<br>";

$x = 30;
echo $y;
echo "<br>";
echo $x;
echo "<br>Os dois valores são alterados, mesmo mudando apenas um valor!";

//verificando se a variavel existe 

if(isset($ar)){
    echo "<br> A variavel existe! ISSET";
}else{
    echo "<br> A variavel não existe! ISSET";
}