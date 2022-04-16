<?php

$data = date('d/m/y');
echo $data . "<br>";

$data = date('D/M/Y');
echo $data . "<br>";

// contando datas

$cinco = strtotime("1 months"); // escreva a data a variação = day, month or year
echo $cinco . "<br>";
$res = date('d/m/y',$cinco);
echo $res . "<br>" ;
