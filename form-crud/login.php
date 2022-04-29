<?php

if(isset($_POST['email'])){

    include("conn/conn.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' LIMIT 1";
    $exec = $conn->query($sql) or die($conn->connect_errno);

    $usuario = $exec->fetch_assoc();

    if(password_verify($senha,$usuario['senha'])){
        if(!isset($_SESSION)){
            session_start();
            $_SESSION['usuario'] = $usuario['id'];
            header("Location:acesso.php");
        }
    }else
        die($conn->error);
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <div class="grid-container">
        <div class="item-1">
            <header>
                <h1>Login Usuário</h1>
            </header>
        </div>
            <div class="item-2">
                <form method="POST" action="">  
                    <p>
                        <input name="email" placeholder="E-mail:" type="email">
                    </p>
                    <p>
                        <input name="senha" placeholder="Senha:" type="password">
                    </p>
                    <p>
                        <input class="btn" type="submit">
                    </p>
                    <p>Deseja se Cadastrar?<a href="cadastro.php"> Clique aqui.</a></p>
                </form>
            </div>
        <div class="item-3">
            <footer>
                <p>Empresa © 2022</p>
            </footer>
        </div>
    </div>
</body>

</html>