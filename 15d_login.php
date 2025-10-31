<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["nome"] = $_POST["nome"];
    $_SESSION["cor"] = $_POST["cor"];
    header("Location: 15d_perfil.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <h2>Crie seu perfil temporário</h2>

        <label for="nome">Seu nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label for="cor">Insira sua cor preferida para plano de fundo:</label><br>


        <select name="cor" id="">
            <option value="#b32b2bff">Vermelho claro</option>
            <option value="#ff768fff">Rosa chiclete</option>
            <option value="#19c7b0ff">Verde água</option>
            <option value="#63d71bff">Verde NCT</option>
            <option value="#891bd7ff">Roxo army</option>
        </select><br><br>

        <button type="submit">Entrar</button>
    </form>
    
</body>
</html>