<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  $nome = "Ja";

  $stmt = $conn->prepare("DELETE FROM usuario WHERE nome = ?");

  $stmt->bind_param("s", $nome);

  $stmt->execute();

  $conn->close();
