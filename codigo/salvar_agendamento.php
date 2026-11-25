<?php
require_once "conexao.php";

$veterinario = $_POST['veterinario'];
$cliente = $_POST['cliente'];
$animais = $_POST['animais'];
$data = $_POST['data'];
$horario = $_POST['horario'];

$sql = "INSERT INTO agendamento VALUES (?, ?, ?, ?, ?)";
$comando = mysqli_prepare($conexao, $sql);

mysqli_stmt_bind_param($comando, "sssss", $nome);
mysqli_stmt_execute($comando);

header("Location: index.php");
?>