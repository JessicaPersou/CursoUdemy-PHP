<?php
        if(isset($_POST['nome'])){
            $dias = time() + (30*86400); // durará 30 dias
            setcookie("nome", $_POST['nome'], $dias);
            header("Location:bemvindo.php");
        }
    ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <form method="POST">
        <h2>Qual o seu nome?</h2>
        <input type="text" name="nome" id="">
        <button type="submit">Salvar</button>
    </form>        
</body>
</html>