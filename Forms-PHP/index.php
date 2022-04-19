<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
<h1>Forms</h1>
<form action="info.php" method ="POST">
    Nome: <input type="text" name="name" id="name" placeholder = "Seu Nome">
    <br>
    Data de Nascimento: <input type="date" name="date" id="date">
    <br>
    <textarea name="text" id="text" cols="20" rows="10">Escreva seu Depoimento: </textarea>
    <br>
    <input type="submit" value="Enviar" id="btn">
</form>

</body>
</html>