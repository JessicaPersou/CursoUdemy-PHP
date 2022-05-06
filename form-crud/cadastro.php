<?php

if (count($_POST) > 0) {  
    
    include("conn/conn.php");
    include("lib/mail.php");

    $erro = false;
    //se for maior que zero ele mostra as variaveis salvas
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    if (empty($nome)) {
        die("<script>alert('Insira um nome Válido!')</script>");
    }

    if (empty($telefone) || strlen($telefone < 11)){
        die("<script>alert('Insira um telefone válido!')</script>");
    }

    if (!empty($nascimento)) {
        $inverte = implode("-", array_reverse(explode("-", $nascimento)));
    }else{
        die("<script>alert('Insira uma data válida!')</script>");
    }

     if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("<script>alert('Insira um email válido!')</script>");
    }

   // if(strlen($_POST['senha'] >= 7)){
      //  die("<script>alert('A senha deve ter 8 ou mais caracteres!')</script>");
    //}


    

    if ($erro) {
        echo "ERRO: $erro";
    }

    $sql = "INSERT INTO usuario (nome, nascimento, telefone, email, senha, data) VALUES 
    ('$nome', '$nascimento', '$telefone', '$email', '$senha', NOW())";

    if ($conn->query($sql) === TRUE) {
        enviarMail($email, "Aviso de Conta Criada!", "<h1>Seja Bem-Vindo</h1>
        <p>Parabéns, sua conta foi criada com sucesso</p>");
        echo "<script>alert('Usuário cadastrado com sucesso!)</script>";
        unset($_POST); //limpa os campos digitados
    } else {
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
        <div class="item-2">
            <form method="POST" action="">
                <h3>Cadastre-se:</h3>
                <br>
                <p>
                    <input value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>" placeholder="Nome Completo" name="nome" type="text">
                </p>
                <p>
                    <input value="<?php if(isset($_POST['nascimento'])) echo $_POST['nascimento']; ?>" name="nascimento" type="date">
                </p>
                <p>
                    <input value="<?php if(isset($_POST['telefone'])) echo $_POST['telefone']; ?>" placeholder="11 99999-9999" name="telefone" type="telefone">
                </p>
                <p>
                    <input value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>" placeholder="E-mail" name="email" type="email">
                </p>
                <p>
                    <input value="<?php if(isset($_POST['senha'])) echo $_POST['senha']; ?>" placeholder="Senha" name="senha" type="password">
                </p>
                <p>
                    <input value="<?php if(isset($_POST['senha'])) echo $_POST['senha']; ?>" name="arquivo" type="file">
                </p>
                <p>
                    <input href="/login.php" class="btn" type="submit">
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