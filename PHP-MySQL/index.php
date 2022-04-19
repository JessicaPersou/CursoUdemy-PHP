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

//acessar uma query
//$sql = " SELECT * FROM pessoas";

//$res = $conn->query($sql);

//print_r($res);

//$conn->close();  //finaliza o acesso ou conexão ao banco de dados



//criando uma tabela
$create = "CREATE TABLE usuario (nome VARCHAR(100), sobrenome VARCHAR(100))";


//para dropar executa o comando a seguir e comenta o comando acima 
//$create = "DROP TABLE teste";

// chamando a query para criar
$conn->query($create); 

$conn->close(); // sempre lembrar de fechar a função


