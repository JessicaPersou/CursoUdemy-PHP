<?php  

include('conexao.php');

$sql_clientes = "SELECT * FROM clientes";
$query_clientes = $conn->query($sql_clientes) or die($conn->error);
$num_clientes = $query_clientes->num_rows;

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Clientes Cadastrados</title>
</head>
<body>
    <h1>Clientes Cadastrados</h1>
    <p>Estes são os clientes que já foram cadastrados no sistema:</p>
    <table border="1" cellpadding="10">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th>Cadastro</th>
            <th>Ações</th>
        </thead>
        <tbody>
                <?php if($num_clientes == 0) {?>

                    <tr>
                        <td colspam ="7">Sem Clientes Cadastrados.</td>
                    </tr>
                
                <?php } else {

                    while($cliente = $query_clientes->fetch_assoc()){

                        $tel = "Não Informado!";
                        if(!empty($cliente['tel'])){
                            $tel = f_tel($cliente['tel']);
                        }

                        $d_nascimento = "Não Informado!";
                        if(!empty($cliente['d_nascimento'])){
                            $d_nascimento = f_data($cliente['d_nascimento']);
                        }

                        $data = date("d/m/Y H:i", strtotime($cliente['data']));

                    ?>
                        <tr>
                            <td><?php echo $cliente['id']; ?></td>
                            <td><?php echo $cliente['nome']; ?></td>
                            <td><?php echo $d_nascimento; ?></td>
                            <td><?php echo $cliente['email']; ?></td>
                            <td><?php echo $tel; ?></td>
                            <td><?php echo $data; ?></td>
                            <td>
                                <button><a href="editar-cliente.php?id=<?php echo $cliente['id']; ?>">Editar</a></button>
                                <button><a href="deletar-cliente.php?id=<?php echo $cliente['id']; ?>">Deletar</a></button>
                            </td>
                        </tr> 
                <?php
            }
         }?>
        </tbody>
    </table>

</body>
</html>