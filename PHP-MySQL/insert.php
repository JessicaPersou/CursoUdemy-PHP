<?php

//dados para acessar o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

//essa variavel tem o nome abreviado de connection
$conn = new mysqli($host,$user,$pass,$db);

//descrevaa os dados que quer adicionar em variaveis
$table = "usuario";
//$nome = "";
//$sobrenome = "Garay";

//inserir informações no banco de dados de uma tabela criada
//$q = "INSERT INTO $table (nome, sobrenome) VALUES ('$nome', '$sobrenome')";

// chamando a query para criar
$conn->query($q); 

// sempre lembrar de fechar a função
$conn->close();