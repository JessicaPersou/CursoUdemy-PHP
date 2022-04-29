<?php

/*$data="1993-03-19";
$inverte= explode("-",$data);
print_r($inverte);
echo "<br>";
$inverte = array_reverse($inverte);
print_r($inverte);
echo "<br>";
$inverte = implode("-",$inverte);
print_r($inverte);*/

$nascimento="1993-03-19";
$inverte = implode("-",array_reverse(explode("-", $nascimento)));
echo $inverte;

?>