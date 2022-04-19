<?php

  $host = "localhost";
  $user = "root";
  $pass = "";
  $db = "cursophp";

  $conn = new mysqli($host, $user, $pass, $db);

  // ASSUNTO DA AULA
  $sobrenome = "Morant";

  $stmt = $conn->prepare("SELECT * FROM usuario WHERE sobrenome = ?");

  $stmt->bind_param("s", $sobrenome);

  $stmt->execute();

  $result = $stmt->get_result();

  $item = $result->fetch_row();

  print_r($item);

  $conn->close();