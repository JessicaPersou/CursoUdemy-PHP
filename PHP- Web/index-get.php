<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <form action="index-test.php" method="GET">
        <div>
            <input type="text" name="nome" placeholder="Seu Nome">
        </div>
        <div>
            <input type="submit" name="botao" value="GET">
        </div>
    </form>
    <form action="index-test.php" method="post">
        <div>
            <input type="text" name="nome" placeholder="Informe o seu Nome">
        </div>
        <div>
            <input type="submit" name="botao" value="POST">
        </div>
    </form>
</body>
</html>