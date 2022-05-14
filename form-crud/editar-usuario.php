<?php

include("conn/conn.php");

$id = intval($_GET['id']);

if (count($_POST) > 0) {  
       
    $erro = false;
    //se for maior que zero ele mostra as variaveis salvas
    $nome = $_POST['nome'];
    $nascimento = $_POST['nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    /*$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);*/

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

    if ($erro) {
        echo "ERRO: $erro";
    }else{

        $sql = "UPDATE usuario SET
        nome = '$nome',
        nascimento = '$nascimento',
        telefone = '$telefone',
        email = '$email'
        WHERE id = 'id'"; 
        $ok = $conn->query($sql) or die($conn->$sql);

        if ($ok) {
            echo "<script>alert('Usuário atualizado com sucesso!)</script>";
            unset($_POST);
        } else {
            echo "ERRO: $sql, ($conn->error)";
        }
    }
}


$sql_consulta = "SELECT * FROM usuario WHERE id = '$id'";
$exe_query = $conn->query($sql_consulta) or die($conn->error);

$usuario = $exe_query->fetch_assoc(); 

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
    <title>Atualização</title>
</head>

<body>
    <div class="grid-container">
        <div class="item-2">
            <form method="POST" action="">
                <h3>Atualização de Cadastro</h3>
                <br>
                <p>
                    <input value="<?php echo $usuario['nome']; ?>" name="nome" type="text">
                </p>
                <p>
                    <input value="<?php echo $usuario['nascimento']; ?>" name="nascimento" type="date">
                </p>
                <p>
                    <input value="<?php echo $usuario['telefone']; ?>" name="telefone" type="telefone">
                </p>
                <p>
                    <input value="<?php echo $usuario['email']; ?>" name="email" type="email">
                </p>
                <p>
                    <button type="submit">Salvar</button>  
                    <button><a href="acesso.php">Voltar</a></button>
                </p>
            </form>
        </div>
        <div class="item-3">
            <footer>
                <p>Jessica ©  <?php echo date("Y");?></p>
            </footer>
        </div>
    </div>
</body>

</html>