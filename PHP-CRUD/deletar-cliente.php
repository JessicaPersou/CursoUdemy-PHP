<?php

if(isset($_POST['confirmar'])){

    include("conexao.php");
    $id = intval($_GET['id']);
    $sql_code = "DELETE FROM clientes WHERE id='$id'";
    $sql_query = $conn->query($sql_code) or die($conn->error);

    if($sql_query){?>
    <h1>Cliente deletado com sucesso!</h1>
    <p><a href="clientes.php">Clique aqui</a> para voltar a lista de clientes.</p>

    <?php
    die();
    } 
}

var_dump($_POST);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Clientes</title>
</head>
<body>
    <h1>Tem certeza que deseja deletar esse cadastro?</h1>
    <form method="POST">
        <button><a href="clientes.php">Não</a></button>
        <button name ="confirmar" value ="1" type ="submit" >Confirmar</button>
    </form> 
</body>
</html>