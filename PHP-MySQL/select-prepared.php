<?php

//dados para acessar o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

//essa variavel tem o nome abreviado de connection
$conn = new mysqli($host,$user,$pass,$db);

//resgatando dados com prepared
$nome = "Thiago";

//adicionando os arquivos acima, mas colocando o ponto de interrogação para depois verifica-los
$stmt = $conn->prepare("SELECT * FROM usuario WHERE nome = ?");

// o bind_param identifica os dados para serem adicionados na query e só deixa passar dados validos
$stmt->bind_param("s", $nome); //s-string, i - integer, d- double

$stmt->execute();

$res = $stmt->get_result();

$data = $res->fetch_all();

print_r($data);