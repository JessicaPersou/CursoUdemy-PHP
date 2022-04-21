
<?php

include_once("carros.php");

// selecionando 

$mostra = " SELECT * FROM carros WHERE fabricante = fiat";

$valor = $conn->query($mostra);
echo $valor;
$conn->close();

