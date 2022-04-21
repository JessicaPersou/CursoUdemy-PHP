<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "carros";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno){
    echo "Falha na Conexão: <br>". $mysqli->connect_errno ;
}else{
    echo "CONECTADO PORRA";
}