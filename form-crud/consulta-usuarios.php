<?php

include("conn/conn.php");

$sql_consulta = "SELECT * FROM usuario"; // FAZ UM SELECT NO BANCO DE DADOS PARA VER CLIENTES CADASTRADO
$query_consulta = $conn->query($sql_consulta) or die($conn->error); //RODA A QUERY E SE DER ERRO PARA
$n_usuarios = $query_consulta->num_rows; // RETORNA O NÚMERO DE CLIENTES EXISTENTES NO BANCO 


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style-table.css">
    <title>Consultar de Usuários</title>
</head>
<body>
    <h1>Lista de Usuários</h1>
    <table class='t-user'>
        <thead>
            <th>ID</th>
            <th>NOME</th>
            <th>DATA DE NASCIMENTO</th>
            <th>TELEFONE</th>
            <th>E-MAIL</th>
            <th>DATA DE CADASTRO</th>
            <th>AÇÕES</th>
        </thead>
        <tbody>
            <?php if ($n_usuarios == 0) { ?>
            <tr>
                <td colspan="8">Não existem usuários cadastrados</td>
            </tr>
            <?php 
            } else {
                
                while($usuario = $query_consulta->fetch_assoc()){
                   $telefone = "Não informado";
                    if(!empty($usuario['telefone'])){
                            $ddd = substr($usuario['telefone'],0,2);
                            $p1 = substr($usuario['telefone'], 2, 5);
                            $p2 = substr($usuario['telefone'], 7);
                            $telefone = "($ddd) $p1 - $p2";
                        }
                   
                    $nascimento = "Não informado!";

                    if(!empty($usuario['nascimento'])){
                        $nascimento = implode('-', array_reverse(explode('-', $usuario['nascimento'])));
                    }
                
                    $dc= date("d/m/Y H:i", strtotime($usuario['data']));
                
                ?>
                <tr>
                    <td><?php echo $usuario['id']; ?></td>
                    <td><?php echo $usuario['nome']; ?></td>
                    <td><?php echo $nascimento;?></td>
                    <td><?php echo $telefone;?></td>
                    <td><?php echo $usuario['email']; ?></td>
                    <td><?php echo $dc; ?></td>
                    <td>
                        <button><a href="editar-usuario.php?id=<?php echo $usuario['id']; ?>">Editar</a></button>
                        <button><a href="deletar-usuario.php?id=<?php echo $usuario['id']; ?>">Deletar</a></button>
                    </td>
                </tr>
            <?php }
            }?>
        </tbody>
    </table>
</body>
</html>