<?php

include("conn/conn.php");

$erro = false;

if(count($_POST) > 0){   //se for maior que zero ele mostra as variaveis salvas
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if(empty($nome)){
       die("<script>alert('Insira um nome Válido!');</script>");
    }

    if(empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Insira um e-mail Válido!");
    }


    if(!empty($nascimento)){
        $inverte = implode("-",array_reverse(explode("-", $nascimento)));
    }

     if($erro){
        echo "ERRO: $erro";
    }



    $sql = "INSERT INTO usuario (nome, nascimento, telefone, email, senha, data) VALUES 
    ('$nome', '$nascimento', '$telefone', '$email', '$senha', NOW())" ;

    if($conn->query($sql) === TRUE){
        echo "<script>alert('Usuário cadastrado com sucesso!)</script>";
    }else{
        echo "ERRO: $sql, ($conn->error)";
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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="grid-container">
        <div class="item-1">
            <header>
                <h1>Cadastrar Usuário</h1>
            </header>
        </div>
            <div class="item-2">
                <form method="POST" action="">
                    <h3>Faça Seu Cadastro</h3>
                    <br>
                    <p>
                        <label for="">Nome</label><br>
                        <input name="nome" type="text">
                    </p>
                    <p>
                        <label for="">Data de Nascimento</label><br>
                        <input name="nascimento" type="date">
                    </p>
                    <p>
                        <label for="">Telefone</label><br>
                        <input name="telefone" type="text">
                    </p>
                    <p>
                        <label  for="">E-mail</label><br>
                        <input name="email" type="email">
                    </p>    
                    <p>
                        <label for="">Senha</label><br>
                        <input name="senha" type="password">
                    </p>
                    <p>
                        <input href="login.php" class="btn" type="submit">
                    </p>
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