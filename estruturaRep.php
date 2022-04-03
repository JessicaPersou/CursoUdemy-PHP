<?php
echo "Estrutura While: <br>";
$num=0;

while($num <=5){
    
    echo $num . "<br>";

    $num++;
}

echo "Estrutura Do While: <br>";

do{
    
    echo $num . "<br>";
    $num++;

}while($num <=5);
echo"<br>";

$arr = [03, 04, 2022];

$contador = count($arr);
$mostra = 0;

while($mostra < $contador){
    if(is_int($arr[$mostra])){
        echo  $arr[$mostra] ;
        echo  "/";
    }
    $mostra++;
}

echo"<br>";
echo "<br> Break: Para a instrução no 24! <br>";
$cont = 4;
while($cont < 30){
    echo $cont. "<br>";
    $cont+=2;
    if($cont === 26){
        break;
    }
}


echo "<br> Continue: Pula a instrução <br>";
$a = 10;

while($a > 0) {

  if($a == 5 || $a == 7) {
    echo "Pulou a execução $a <br>";
    $a--;
    continue;
  }

  if($a == 2) {
    echo "Terminando o loop break $a <br>";
    break;
  }

  echo "Executando o loop $a <br>";
  $a--;

}

//ex array
echo"<br>";
echo "<br> Array com LOOP: <br>";
$n = [10,20,30, 40, 50, 60, 70, 80, 90, 100];
$o = 0;
while($o <count($n)){
   $nAtual = $n[$o];
 
  if($nAtual == 30 || $nAtual == 40){
      $o++;
      continue;
  }
    echo "Aqui é o elemento:" . $nAtual . "<br>" ;
    $o++;
   
}
echo"<br>";
echo "LOOP FOR: <br>";
// for

for($i=0;$i<10;$i++){
    echo"<br>";
    echo $i;
}