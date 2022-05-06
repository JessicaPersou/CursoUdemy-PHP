<?php

include("conn.php");

if(isset($_GET['deletar'])){
    $id = intval(($_GET['deletar']));
    $sql_query = $conn->query("SELECT * FROM arquivos WHERE id = '$id'") or die($conn->error);
    $arquivo = $sql_query->fetch_assoc();

    if(unlink($arquivo['path'])){
        $deu_certo = $conn->query("DELETE FROM arquivos WHERE  id = '$id'") or die($conn->error);
        if($deu_certo)
            echo "Arquivo excluído com sucesso!";
    }

}

function enviarArquivo($error, $size, $name, $tmp_name){

    include("conn.php");

        if ($error)
            die("Falha no envio do arquivo!");
        

            if ($size > 2097152)
                die("Arquivo muito grande, Max: 2MB");
            

        $pasta = "arquivos/";
        $nomeArquivo = $name;
        $novoNome = uniqid();
        $extensao = strtolower(pathinfo($nomeArquivo, PATHINFO_EXTENSION));

            if ($extensao != "jpg" && $extensao != "png")
                die("Tipo de arquivo diferente, verifique a extensão.");
            

        $path = $pasta . $novoNome . "." . $extensao;
        $deu_certo = move_uploaded_file($tmp_name, $path);

            if ($deu_certo) {
                $conn->query("INSERT INTO arquivos (nome , path, data_upload) 
                VALUES ('$nomeArquivo', '$path', NOW())") or die($conn->error);
                return true;
                //echo "Arquivo enviado com sucesso.";
                // Clique para <a target=\"_blank\" href=\"arquivos/$nomeArquivo.$extensao\">Abrir!</a>";
            } else
                return false;
                //echo "Falha, tente novamente.";
        }        
        //var_dump($_FILES);

    if (isset($_FILES['arquivos'])){
        $arquivos = $_FILES['arquivos'];
        $tudo_certo = true;
        foreach($arquivos['name'] as $index->$arq){
            $deu_certo = enviarArquivo($arquivos['error'][$index], $arquivos['size'][$index], $arquivos['name'][$index], $arquivos['tmp_name'][$index]);
            if(!$deu_certo)
                $tudo_certo = false;
            }
        
        if($tudo_certo)
            echo "Todos arquivos enviados com sucesso!";
        else
            echo "Falha ao enviar em ou mais arquivos!";
        
    }

$sql_query = $conn->query("SELECT * FROM arquivos") or die($conn->$mysqli->error);

?>