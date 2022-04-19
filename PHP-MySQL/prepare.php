<?php

//dados para acessar o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

//essa variavel tem o nome abreviado de connection
$conn = new mysqli($host,$user,$pass,$db);

//adicionando dados ao banco com segurança
$nome = "Thiago";
$sobrenome = "Monteiro";

//adicionando os arquivos acima, mas colocando o ponto de interrogação para depois verifica-los
$stmt = $conn->prepare("INSERT INTO usuario (nome, sobrenome) VALUES (?,?)");

// o bind_param identifica os dados para serem adicionados na query e só deixa passar dados validos
$stmt->bind_param("ss", $nome, $sobrenome); //s-string, i - integer, d- double

$stmt->execute();