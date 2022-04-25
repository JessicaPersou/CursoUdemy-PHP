<?php

        include('conexao.php');

        $id = intval($_GET['id']);

    //FUNÇÃO PARA LIMPAR OS CARACTÉRES NÃO NÚMERICOS
    function limpar_texto($str){  
        return preg_replace("/[^0-9]/", "", $str); 
    }

// SE ALGUM ERRO EXISTIR ESSA VARIÁVEL MOSTRA
    if(count($_POST) > 0){



    $erro = false;
    $nome = $_POST['nome'];
    $d_nascimento = $_POST['d_nascimento'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    

    // VERIFICAÇÃO PARA A QUANTIDADE DE CARACTERES DO NOME 
    if(empty($nome)){
        $erro = "Preencha o campo nome Corretamente!"; 
    }

    // VERIFICA SE O EMAIL É VALIDO USANDO A FUNÇÃO DO PHP
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){ 
        $erro = "Preencha o campo e-mail Corretamente!";
    }

    /* 
    ** TIRA O "/" DOS CARACTERES E DEIXA SÓ OS NUMEROS
    ** VERIFICA OS TRÊS CAMPOS PREENCHIDOS dd-mm-aaa 
    ** ADICIONA O "-"  ENTRE CADA CAMPO PREENCHIDO ACIMA 
    */
    if(!empty($d_nascimento)){
        $tmp = explode('/', $d_nascimento); 
        if(count($tmp) == 3){               
            $d_nascimento = implode ('-', array_reverse($tmp));  
        }else{
            $erro = "A data de nascimetno deve seguir o padrão: DD/MM/AAAA.";
        }
    }  

    // LIMPA OS SIMBOLOS USADOS NO TEXTO DO TELEFONE E DEIXA SÓ OS NÚMEROS 
    // VERIFICA A QUANTIDADE DE CARACTERES USADO
     if(!empty($tel)){
        $tel = limpar_texto($tel);  
        if(strlen($tel) != 11){ 
            $erro = "O telefone deve ser preenchido no padrão (11) 98765-4321";
        }
    }

    // ULTIMA VERIFICAÇÃO PARA ADICIONAR CAMPOS PREENCHIDOS AO BANCO DE DADOS
    if($erro){
        echo "Erro: $erro";
    }else{

        $sql_code = "UPDATE clientes SET 
        nome = '$nome', 
        d_nascimento = '$d_nascimento', 
        email = '$email', 
        tel = '$tel'
        WHERE id = '$id'";
        $ok = $conn->query($sql_code) or die($conn->error); 

        // SE ESTIVER TUDO CERTO APARECE A MENSAGEM
        if($ok){

            // LIMPA O QUE FOI DIGITADO NOS CAMPOS
            echo "Cadastro atualizado com Sucesso!";
            unset($_POST); 
        }
    }
}


        $sql_cliente = "SELECT * FROM clientes WHERE id = '$id'";
        $query_cliente = $conn->query($sql_cliente) or die($conn->error);
        $cliente = $query_cliente->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Clientes</h1>
    <a href="clientes.php">Voltar p/ Clientes.</a> <!--adicionar o arquivo clientes.php-->
    <form method="POST" action="">
        <div>
            <label for="nome">Nome:</label>
            <input value=" <?php echo $cliente['nome']; ?>" name="nome" type="text">  
        </div>
        <div>
            <label for="d_nascimento">Data de Nascimento:</label>
            <input value=" <?php if(!empty($cliente['d_nascimento'])) echo f_data($cliente['d_nascimento']); ?>"name="d_nascimento" type="text">  
        </div>
        <div>
            <label for="email">E-mail:</label>
            <input value=" <?php echo $cliente['email']; ?>"name="email" type="email">  
        </div>
        <div>
            <label for="tel">Telefone:</label>
            <input value=" <?php if(!empty($cliente['tel'])) echo f_tel($cliente['tel']); ?>" placeholder="(11) 98765-4321" name="tel" type="text">  
        </div>
        <div>
            <button type="submit">Salvar Modificação</button>  
        </div>
    </form>
</body>
</html>