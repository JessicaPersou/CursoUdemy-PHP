<?php

//dados para acessar o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

//essa variavel tem o nome abreviado de connection
$conn = new mysqli($host,$user,$pass,$db);

//selecionando dados 

$q = "SELECT * FROM usuario";

$result = $conn->query($q);

$conn->close();

//seleciona um dado da tabela, o primeiro geralmente
$usuario = $result->fetch_assoc();

//pegar todos os resultados da tabela e abrir em forma de array
$usuario = $result->fetch_all();

print_r($usuario);
