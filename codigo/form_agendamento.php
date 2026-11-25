<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
</head>
<body>
    <h1>Cadastro de Agendamento</h1>
<br> <br>

<form action="salvar_agendamento.php" method="POST">

        Veterinario:
        <br>
        <select name="idveterinario">

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM veterinario";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($comando);

            $resultados = mysqli_stmt_get_result($comando);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idtrabalho = $linha['idveterinario'];
                $nome = $linha['nome'];

                echo "<option value='$idveterinario'>$nome</option>";
            }
            ?>

        </select>
        <br><br>

        Cliente:
        <br>
        <select name="idcliente">

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM cliente";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($comando);

            $resultados = mysqli_stmt_get_result($comando);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idtrabalho = $linha['idcliente'];
                $nome = $linha['nome'];

                echo "<option value='$idcliente'>$nome</option>";
            }
            ?>

        </select>
        <br><br>

        Animal:
        <br>
        <select name="idanimais">

            <?php
            require_once "conexao.php";

            $sql = "SELECT * FROM animais";

            $comando = mysqli_prepare($conexao, $sql);

            mysqli_stmt_execute($comando);

            $resultados = mysqli_stmt_get_result($comando);

            while ($linha = mysqli_fetch_array($resultados)) {

                $idtrabalho = $linha['idanimais'];
                $nome = $linha['nome'];

                echo "<option value='$idanimais'>$nome</option>";
            }
            ?>

        </select>
        <br><br>

        Data:
        <br>
        <input type="date" name="data">
        <br><br>

        Horario:
        <br>
        <input type="time" name="horario">
        <br><br>

        <input type="submit" value="Cadastrar">

    </form>
</body>
</html>