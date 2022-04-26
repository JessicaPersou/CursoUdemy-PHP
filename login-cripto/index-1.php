<?php

if(isset($_POST['email'])){

    include("conn.php");

    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $email = $_POST['email'];
    
    $conn->query("INSERT INTO acesso (email, senha) VALUES ('$email','$senha')");

    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h2>Cadastrar Senha</h2>
<form method="POST">
    <label for="email">Email</label>
    <input type="email" name="email">
    <label for="senha">Senha</label>
    <input type="text" name="senha">
    <button type="submit">Cadastrar</button>
</form>    

</body>
</html>


<?php
//TESTANDO FUNÇÕES
/*$senha=1234;
$md5 = md5($senha);//nunca usar md5

$hash = password_hash($senha, PASSWORD_DEFAULT);


*/
?>