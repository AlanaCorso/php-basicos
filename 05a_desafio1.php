<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Maioridade</title>
</head>
<body>
    <!-- Formulário de cadastro -->
    <form action="" method="post">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" required> <br>

        <label for="ano">Ano de nascimento:</label>
        <input type="number" name="ano" required> <br>

        <!-- Botão de cadastro -->
        <button type="Submit">Verificar</button>

    </form>

<?php
        if($_SERVER ['REQUEST_METHOD'] == 'POST') {
                $nome = $_POST['nome'];
                $ano = $_POST['ano'];
         }

         $idade = date(2025) - $ano;

         if ($idade >= '18') {

            $arquivo = fopen('log_acessos.txt', 'a');

            $linha = $nome . ';' . $idade . "\n";

            fwrite($arquivo, $linha);

            fclose($arquivo);

            echo "<p style='color: green';>Acesso permitido, $nome </p>";

         } else {
            $erro = "Acesso negado, $nome";
        }

        if(isset($erro)) {
            echo"<p style='color: red';>$erro</p>";
        }
         
?>