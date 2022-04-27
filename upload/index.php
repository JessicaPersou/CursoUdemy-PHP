<?php

include("conn.php");

//if(isset($_FILES()))

if (isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    if ($arquivo['error'])
        die("Falha no envio do arquivo!");

    if ($arquivo['size'] > 2097152)
        die("Arquivo muito grande, Max: 2MB");

    $pasta = "arquivos/";
    $nomeArquivo = $arquivo['name'];
    $novoNome = uniqid();
    $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

    if ($extensao != "jpg" && $extensao != "png")
        die("Tipo de arquivo diferente, verifique a extensão.");

    $path = $pasta . $novoNome . "." . $extensao;
    $ok = move_uploaded_file($arquivo["tmp_name"], $path);

    if ($ok) {
        $conn->query("INSERT INTO arquivos (nome , path, data_upload) VALUES ('$nomeArquivo', '$path', NOW())") or die($conn->error);

        echo "Arquivo enviado com sucesso.";
        // Clique para <a target=\"_blank\" href=\"arquivos/$nomeArquivo.$extensao\">Abrir!</a>";
    } else
        echo "Falha, tente novamente.";
}

$sql_query = $conn->query("SELECT * FROM arquivos") or die($conn->$mysqli->error);

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>
    <form method="POST" enctype="multipart/form-data" action="">
        <label for="">Selecione o Arquivo</label>
        <input name="arquivo" type="file" id="">
        <button name="upload" type="submit">Enviar Arquivo</button>
    </form>
    <h1>Arquivos Enviados:</h1>
    <table border="1" cellpadding="10">
        <thead>
            <th>PREVIEW</th>
            <th>ARQUIVO</th>
            <th>DATA DE ENVIO</th>
        </thead>
        <tbody>
            <?php
                while($arquivo = $sql_query->fetch_assoc()){
            ?> 
            <tr>
                <td><img height="50" src="<?php echo $arquivo['path'];?>"</td>
                <td><a target="_blank" href="<?php echo $arquivo['path'];?>"><?php echo $arquivo['nome'];?></a></td>
                <td><?php echo date("d/m/Y H:i", strtotime($arquivo['data_upload']))?></td>
            </tr>          
            <?php    }?>
        </tbody>
    </table>


</body>

</html>