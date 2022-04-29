<?php

if(isset($_POST['email'])){

    include("conn.php");
    
    $email = $_POST['email'];
    $senha = ($_POST['senha']);

    $sql_code = "SELECT * FROM acesso WHERE email = '$email' LIMIT 1";
    $sql_exec = $conn->query($sql_code) or die ($conn->error);

    $user = $sql_exec->fetch_assoc();

    if(password_verify($senha, $user['senha']))
    {
        if(!isset($_SESSION)){
            session_start();
            $_SESSION['user'] = $user['id'];
            header("Location: cadastro.php");
        }else{
            echo "Falha ao logar, verifique e-mail e senha!";
        }
    }
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
    <title>Login</title>
</head>

<body class="body">
    <form class="form" method="POST">

        <h2>Login</h2>

        <label for="email">Email</label>
        <input type="email" name="email">

        <label for="senha">Senha</label>
        <input type="password" name="senha">

        <button type="submit"><a href="cadastrar.php">Entrar</a></button>
    </form>    
</body>
    <footer class="footer">
        © Jessica - 2022
    </footer>
</html>