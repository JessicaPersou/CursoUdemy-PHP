<?php

include("index-cadastrar.php");

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interno</title>
</head>
<header class="header">
    <h1>Cadastrar Usuários</h1>  
</header>
<body>  
    <main class="main">
    <form class="form" method="POST" action="">
       
            <div>
                <label for="nome">Nome:</label>
                <input value="" name="nome" type="text">  
            </div>
            <div>
                <label for="nascimento">Data de Nascimento:</label>
                <input value="" name="nascimento" type="text">  
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input value=""name="email" type="email">  
            </div>
            <div>
                <label for="tel">Telefone:</label>
                <input value="" placeholder="(11) 98765-4321" name="tel" type="text">  
            </div>
            <div>
                <button type="submit">Salvar</button>  
                <button><a href="clientes.php">Voltar</a></button>
            </div>
</body>
</html>