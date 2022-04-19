<?php

//dados para acessar o banco de dados
$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

//essa variavel tem o nome abreviado de connection
$conn = new mysqli($host,$user,$pass,$db);

//essa função mostra se tiver algum erro na conexão com o banco de dados
if($conn->connect_errno){ 
    echo "Erro na conexão <br>";
    echo "Erro: ". mysqli_connect_error(); //mostrar o erro aqui 
}

//acessar e criar uma query
$sql = " SELECT * FROM pessoas";

$res = $conn->query($sql);

print_r($res);

$conn->close(); //finaliza o acesso ao banco de dados