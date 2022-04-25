<?php

$host = "localhost";
$db = "crud-clientes";
$user = "root";
$pass = "";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno){
    die("Falha na conexão do banco de dados!");
}

function f_data($d_nascimento){
    return implode('/', array_reverse(explode('-', $d_nascimento)));
}

function f_tel($tel){  
    if(!empty($tel)){
        $ddd = substr($tel, 0, 2);
        $p1 = substr($tel, 2, 5);
        $p2 = substr($tel, 7);
        return "($ddd) $p1 - $p2";
    }
}