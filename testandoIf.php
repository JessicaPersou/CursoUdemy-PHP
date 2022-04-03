<?php 

$peso = 67; // se trocar esse número o resultado será diferente!
$limite = 80;

if($peso < $limite){
    echo "Dentro do Limite";
}else{
    echo "Fora do Peso";
}

//if aninhado é quando tem um if dentro de outro

if($peso > $limite){
    echo "<br> É maior!";
    if(true){
        echo "<br>" . $peso - $limite;
    }
}else{
    echo "<br>Está com o peso certo!";
}

echo "<br>Testando SWITCH CASE:";

$valor = 19;

switch($valor){

    case 0:
        echo "<br>Valor 0 <br>";
        break;

    case 1:
        echo "<br>Valor 1 <br>";
        break;

    default:
        echo "<br>Outro valor!";

}