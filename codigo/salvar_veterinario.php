<?php
require_once "conexao.php";

$nome = $_POST['nome'];
$especialidade = $_POST['especialidade'];
$email = $_POST['email'];

$sql = "INSERT INTO veterinario VALUES (?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sss", $nome);
mysqli_stmt_execute($comando);

header("Location: index.php");
?>