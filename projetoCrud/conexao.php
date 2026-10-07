<?php

$host = "192.168.10.106";
$usuario = "postgres";
$senha = "1234";
$banco = "lojasegundao";

$pdo = new PDO(
    "pgsql:host=$host;port=5432;dbname=$banco",
    $usuario,
    $senha
);