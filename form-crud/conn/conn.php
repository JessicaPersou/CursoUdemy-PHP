<?php

$host="localhost";
$user="root";
$pass="";
$db="form-crud";

$conn= new mysqli ($host, $user, $pass, $db);

if($conn->connect_errno){
    die("Falha ao Conectar ao Banco de Dados!");
}