<?php
//TESTAR COM ALGUMA TABELA QUE TENHA IP E NÃO SOMENTE STRINGS

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA
$nome = "Thiago";

$stmt = $conn->prepare("UPDATE usuario SET nome = ? WHERE sobrenome = ?");

$sobrenome = "Silva";

$stmt->bind_param("s", $sobrenome);

$stmt->execute();

if($stmt->error) {
  echo "Erro: " . $stmt->error;
}