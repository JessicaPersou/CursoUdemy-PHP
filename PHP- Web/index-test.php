<?php

//print_r($_GET);
$nome = $_GET['nome'];
echo $_SERVER['REQUEST_METHOD']; // para saber qual o metodo que esta sendo usado na página

?>

<h1>O Seu nome é <?= $nome ?></h1>