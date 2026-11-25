<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$especie = $_POST['especie'];
$raca = $_POST['raca'];
$idade = $_POST['idade'];

$sql = "INSERT INTO animais VALUES (?, ?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "ssss", $nome);
mysqli_stmt_execute($comando);

header("Location: index.php");
?>