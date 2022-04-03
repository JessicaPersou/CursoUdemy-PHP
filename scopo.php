<?php

echo "Local: Variável declarada em uma função;<br>";
//o valor sempre será resetado quando a função for finalizada, não acessivel fora da mesma

function testeL(){
    $local = "Escopo Local";
    echo "$local <br>";
}
testeL();  // precisa chamar ela pra ser acessada

echo "<br> Global: Variável declarada fora de uma função;<br>";

$teste = "asd";

echo "$teste global 1 <br>";

if(5 > 2) {

  $teste = "dsa";

  echo "$teste if <br>";

}

echo "$teste global 2 <br>";

function funcao() {

  $teste = "xsxs";

  echo "$teste local <br>";

}

funcao();

function testandoGlobal() {

  global $teste;

  $teste = 2;

  echo "$teste global função <br>";

}

testandoGlobal();

echo "$teste global 3 <br>";

echo "<br>"; 

echo "Static: Variável declarada dentreo da função, porém o seu valor permance salvo entre chamadas da função;<br>";

function estatico() { // sem o static

    $a = 0;
    $a++;

    echo "$a <br>";

  }

  estatico();
  estatico();
  estatico();

  function testeStatic() {

    static $a = 0;
    $a++;

    echo "$a <br>";

  }

  testeStatic();
  testeStatic();
  testeStatic();

echo "Parâmetros de função: Variáveis passadas para uma função, podendo ser utilizadas ao longo da mesma;<br>";
function soma($a, $b) {

    echo $a + $b;
    echo "<br>";

  }

  soma(2, 4);
  soma(6, 8);
  soma(10, 10);