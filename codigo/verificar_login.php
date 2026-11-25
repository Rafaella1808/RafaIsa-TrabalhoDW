<?php
require_once "conexao.php";

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "select * from veterinario WHERE email = '$email' AND senha = '$senha'";
    
    $resultado = mysqli_query($conexao, $sql);

    $quantidade = mysqli_num_rows($resultado);
    
    if ($quantidade == 1) {

        $linha = mysqli_fetch_array($resultado);

        $nome = $linha['nome'];
        $email = $linha['email'];
        $idveterinario = $linha['idveterinario'];
        // $foto = $linha['foto'];
        
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        $_SESSION['idveterinario'] = $idveterinario;
        
        header("Location: principal.php");
    }
    else {
        header("Location: index.php?erro=login&email=$email");
    }
?>