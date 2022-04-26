<?php

if(isset($_FILES['arquivo'])){
    $arquivo = $_FILES['arquivo'];

    if($arquivo['error'])
        die("Falha no envio do arquivo!");
    
        if($arquivo['size']>2097152)
            die("Arquivo muito grande, Max: 2MB");

            $pasta = "arquivos/";
            $tmp = $arquivo['name'];
            $fName = uniqid();
            $extensao = strtolower(pathinfo($tmp, PATHINFO_EXTENSION));

            if($extensao != "jpg" && $extensao != "png")
                die("Tipo de arquivo diferente, verifique a extensão");
              
    $path = $pasta . $fName . "." . $extensao;  
    $ok = move_uploaded_file($arquivo["tmp_name"], $path);

    if($ok){
        $conn->query("INSERT INTO arquivos (nome , path) VALUES ('$tmp', '$path')") or die($conn->error);
            echo "Arquivo enviado com sucesso.";
        // Clique para <a target=\"_blank\" href=\"arquivos/$fName.$extensao\">Abrir!</a>";
    }else
        echo "Falha, tente novamente";
    
}


?>


<!DOCTYPE html>
<html lang="en">
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
</body>
</html>