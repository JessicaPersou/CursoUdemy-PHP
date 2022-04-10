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
$arrAss = [];
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
echo count($arr);
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
echo "<br>";
echo "$nome  <br>";
echo "<br>";

// array slice

$carro = ["Jaguar", 3.0 ,"Azul",18 , "Teto Solar", "Automático" ]; 

list($modelo, $potencia, $cor, $aro, $opicional, $cambio) = $carro;

echo " $modelo <br>";
echo " $potencia <br>";
echo " $cor <br>";
echo " $aro <br>";
echo " $opicional <br>";
echo " $cambio <br>";

print_r($carro);

// dividindo array
$divide=range(1,20);
$arr = array_chunk($divide,5);
echo "<br>";
print_r($arr);
echo "<br>";


//array keys
$arrayAss =[
    'marca' => 'chevrolet',
    'motor' => '1,4',
    'cambio' => 'manual'
]; 

echo "<br>";
$chaves = array_keys($arrayAss); //chaves dos arrays
print_r($chaves);
echo "<br>";

//array valores

$val = array_values($arrayAss); // valores dos arrays
print_r($val);
echo "<br>";

//checando se a chave existe

if(array_key_exists('marca',$arrayAss)){
    echo " a chave existe!<br>";
}else{
    echo " a chave não existe!<br>";
}

if(array_key_exists('nome',$arrayAss)){
    echo " a chave existe!<br>";
}else{
    echo " a chave não existe!<br>";
}

// verificando com ISSET se existe 
if(isset($arrayAss['motor'])){
    echo " a chave existe!<br>";
}else{
    echo " a chave não existe!<br>";
}

if(isset($arrayAss['cor'])){
    echo " a chave existe!<br> (ISSET)";
}else{
    echo " a chave não existe!<br> (ISSET)";
}


//resgatando elementos do array
$resgate =[1,2,3,4];

$remove = array_slice($resgate,1,2);
echo'<br>';
print_r($resgate);
echo'<br>';


print_r($remove);
echo'<br>';

