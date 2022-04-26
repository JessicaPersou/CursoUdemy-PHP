<?php

if(isset($_POST['email'])){

    include("conn.php");
    
    $email = $_POST['email'];
    $senha = ($_POST['senha']);

    $sql_code = "SELECT * FROM acesso WHERE email = '$email' LIMIT 1";
    $sql_exec = $conn->query($sql_code) or die ($conn->error);

    $user = $sql_exec->fetch_assoc();

        if(password_verify($senha, $user['senha'])){
            echo "Conectado!";
                }else{
                    echo "Errrouuu!";
                }
            }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="POST">

        <label for="email">Email</label>
        <input type="email" name="email">

        <label for="senha">Senha</label>
        <input type="text" name="senha">

        <button type="submit">Cadastrar</button>
    </form>    

</body>
</html>