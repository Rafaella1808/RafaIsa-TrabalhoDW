<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];

$sql = "INSERT INTO cliente VALUES (?, ?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "ssss", $nome);
mysqli_stmt_execute($comando);

header("Location: index.php");
?>