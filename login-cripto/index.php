<?php

include("conn.php");

if(!isset($_SESSION))
    session_start();

if(!isset($_SESSION['user']))
    die('Você não está logado!<a href="login.php">Clique aqui</a> para logar.');

if(isset($_POST['email'])){

    

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    
    $conn->query("INSERT INTO acesso (email, senha) VALUES ('$email','$senha')");

    
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Roboto:wght@100;300;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cadastrar</title>
</head>

<body class="body">
    <form class="form" method="POST">

        <h2>Cadastrar Senha</h2>

        <label for="email">Email</label>
        <input type="email" name="email">

        <label for="senha">Senha</label>
        <input type="text" name="senha">

        <button type="submit">Cadastrar</button>
    </form>    
    <p><a href="logout.php">Sair</a></p>
</body>
    <footer class="footer">
            © Jessica - 2022
    </footer>



<?php
//TESTANDO FUNÇÕES
/*$senha=1234;
$md5 = md5($senha);//nunca usar md5

$hash = password_hash($senha, PASSWORD_DEFAULT);


*/
?>