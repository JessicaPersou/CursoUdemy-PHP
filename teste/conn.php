<?php

$host = "localhost";
$db = "user_crud";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno){
    die("ERRO: Falha na conexão com o bando de dados.");
}