<?php

$host = "localhost";
$db = "crud-clientes";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno){
    die("Falha na conexão do banco de dados!");
}