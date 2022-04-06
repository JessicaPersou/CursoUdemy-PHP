<?php

//Adicionando arquivos a arrays
$arr = ["A","B","C"];
$arr[3]=("D");
print_r($arr);
echo "<br>";

// modificando arrays existentes
$arr = ["A","B","C"];
$arr[0]=("D");
print_r($arr);
echo "<br>";

//array associativo
$arrAsso = [];
print_r($arrAss);
echo "<br>";
$arrAss ["car"] = "gm";
print_r($arrAss);
echo "<br>";

//adicionando arquivos no fim do array
$ar = [1,2,3];
print_r($ar);
echo "<br>";
$ar [] = 4;
print_r($ar);
echo "<br>";

//criando array rapidamente
$rapido = range(0,50); // direto
print_r($rapido);
echo "<br>";

//criando array rapidamente
$rap = range(0,50,10); // pulando 10
print_r($rap);
echo "<br>";
//exercicios
$criando = range(10,45); // cria array
$soma = 6;

print_r($criando);
echo "<br>";

for($i=0;$i<count($criando);$i++){
    $soma=$criando[$i]+6;;
    echo "<br>" . $soma;


if($soma >= 30){
        echo "<br>";
        print_r("o número esta muito grande");
        echo "<br>";
    }

}
echo "<br>";
echo "<br>";
echo "<br>";

//testando count()
echo count($ar);
echo"<br>";
echo count($arrAss);
echo"<br>";
echo count($rapido);

//array multidimencional
$arrM=[[1,2,3],
[4,5,6],
[7,8,9]];

echo "<br>";
echo "<br>";
echo "<br>";
echo ($arrM[1][1]) ."<br>";

echo count($arrM[2]) . "<br>";

//criando várias variáveis

$pessoa = ["jessica", 29, "programadora"];
list($nome, $idade,$profissao) = $pessoa;

echo $nome;
