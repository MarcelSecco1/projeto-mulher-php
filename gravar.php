<?php
session_start();
require "conexao.php";
$nome = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$mensagem = filter_input(INPUT_POST, "message", FILTER_SANITIZE_SPECIAL_CHARS);

$sql = "insert into contato (nome, email, contato) values (?, ?, ?)";

$stmt = $conn->prepare($sql);
$result = $stmt->execute([$nome, $email, $mensagem]);

if ($result == true) {
    header("Location: index.php");
    $_SESSION["msg"] = true;
    $_SESSION["nome"] = $nome;
} else {
    header("Location: index.php");
    $_SESSION["msg"] = false;
}
