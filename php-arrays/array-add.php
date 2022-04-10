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

//usando extract usando linha 113
$arrayAs =[
    'cor' => 'azul',
    'porta' => '4',
    'carroceria' => 'cd'
]; 

extract($arrayAs); // cria variavel a partir da chave do array

echo "$cor <br>";
echo "$porta <br>";
echo "$carroceria <br>";


echo "<br>";

$modelo = "a71";
$capacidade = 128;
$color = "branca";
$bom = true;

$varia = compact("modelo", 'capacidade', 'color', 'bom'); // cria array a partir do valor das variaveis já existentes

print_r($varia);

echo'<br>';
echo'<br>';
foreach($varia as $item => $value){
    echo "$item: $value <br>";
}

//array_reduce reduz o array em um unico valor
$redu =[1,2,3,4,5,6,7,8,9];

function somando($n1,$n2){
    return $n1 + $n2;
}

$res = array_reduce($redu,"somando"); // primeiro argumento o array e o segundo a função 

echo "<br>";
echo $res;

 if(in_array(2,$redu)){
     echo "<br> Tem o item";
 }else{
     echo "<br> Não tem o item";
 }


//  crescente pelo valor do item
 $ordem =[19,1,23,548,254,0,-1];

 sort($ordem);

echo "<br>";
print_r($ordem); 
echo "<br>";

//valor decrescente pelo item

rsort($ordem);
print_r($ordem); 
echo "<br>";

//valor crescente pela chave

arsort($varia);
print_r($varia); 
echo "<br>";


// valor descrescente pela chave
ksort($varia);
print_r($varia); 
echo "<br>";

// array reverso, funciona pra string tbm, do ultimo pro primeiro e vice versa

array_reverse($ordem);

echo "<br>";
print_r($ordem); 
echo "<br>";

//ordem aleatoria
shuffle($ordem);
echo "<br>";
print_r($ordem); 
echo "<br>";


//função de soma de array
$sum = array_sum($ordem);

echo "<br>";
print_r($sum); 
echo "<br>";


//unindo os arrays já existentes com merge em um array unico

$mergeA = array_merge($varia, $ordem, $redu);
print_r($mergeA);
echo "<br>";


//função de soma de array
$diff = array_diff($ordem, $varia); // diferença do primeiro em relação ao segundo array

echo "<br>";
print_r($diff); 
echo "<br>";