<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "daotest";

$conn = new PDO ("mysql:dbname=$db;host=$host", $user, $pass); // conexão pelo pdo