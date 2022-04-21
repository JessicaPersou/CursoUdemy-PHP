<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="form-index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet"><meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário:</title>
</head>
<body>
    <form method="POST">
        <div>
           
                <h1>Contato:</h1>
            
            <div>
                <label for="nome">Nome:</label>
                <input name = "nome" type="text" placeholder="Insira seu Nome:"> <!-- obrigatório o envio do campo que estiver escrito required -->
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input name = "email" type="email" placeholder="Insira seu E-mail:">
            </div>
            <div>
                <label for="msg">Mensagem:</label><br>
                <textarea name="msg" id="" cols="30" rows="10"placeholder="Insira sua Mensagem:"></textarea>
            </div>
            <div>
                <label for="">Nível de Conhecimento:</label>
                <input name="nivel" value= "Iniciante" type="radio">Iniciante
                <input name="nivel" value= "Intermediário" type="radio">Intermediário
                <input name="nivel" value= "Avançado" type="radio">Avançado
            </div>
            <div>
                <button name="envia" type="submit">Enviar</button>
            </div>
                <h2>Dados Enviados:</h2>
            <?php // verificação para ver se a variavel foi iniciada ou se ela existe

                if(isset($_POST['envia'])){

                    if(empty($_POST['nome']) || strlen($_POST['nome']) < 3 || strlen($_POST['nome']) > 100){
                        echo '<p class= "erro"> "* Preencha o Campo Nome" </p>';
                        die(); // essa função faz o código que está abaixo dela morrer
                    }

                    if(empty($_POST['email']) || !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
                        echo '<p class= "erro"> "* Preencha o Campo E-mail "</p>';
                        die(); // essa função faz o código que está abaixo dela morrer
                    }

                    if(empty($_POST['msg'])){
                        echo '<p class= "erro"> "* Preencha o Campo Mensagem " </p>';
                        die(); // essa função faz o código que está abaixo dela morrer
                    }

                    $nivel = "Não Selecionado"; // caso o genero não seja selecionado, esse será o padrão dele que é não selecionado
                    
                    if(isset($_POST['nivel'])){
                        $nivel = $_POST['nivel'];
                        if($nivel != "Iniciante" && "Intermediário" && "Avaçado"){
                            echo '<p class= "erro"> "* Preencha o Campo Nível Corretamente " </p>';
                            die();
                        }
                    }

                    echo "<p><b>Nome: </b>" . $_POST['nome'] . "</p>";
                    echo "<p><b>E-mail: </b>" . $_POST['email'] . "</p>";
                    echo "<p><b>Mensagem: </b>" . $_POST['msg'] . "</p>";
                    echo "<p><b>Nível de Conhecimento: </b>" . $_POST['nivel'] . "</p>";

                }

                //validações feitas, depois adicionar css à página de formulário.

            ?>
        </div>
    </form>
</body>
</html>