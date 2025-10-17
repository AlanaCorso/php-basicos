<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de usuário</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required> <br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required> <br>

        <button type="submit">Entrar</button>
    </form>

    <?php
        // Verifica se o formulário foi enviado
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os valores enviados pelo formulário
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            // Abre o arquivo usuarios.txt para leitura
            // 'r' para apenas ler
            $arquivo = fopen('usuarios.txt', 'r');
            $login_sucesso = false;

            // Lê cada linha do arquivo (while - loop); "fgets" - lê as linhas
            while (($linha = fgets($arquivo)) !== false) {
                // Divide a linha pelo delimitador ";"
                // "trim" - retira espaços em branco
                // "explode" - separa string pelo delimitador (;)
                // "list" - atrinuição multipla
                list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));

                // Verifica se o nome e a senha correspondem aos valores no arquivo
                if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
                    $login_sucesso = true;
                    break; // Interrompe o loop (while). Usuário localizdo no arquivo
                }
            };

            // Fecha  arquivo
            fclose($arquivo);

            // Exibe a mensagem (feedback) de sucesso ou erro
            if ($login_sucesso) {
                echo "<p style='color: darkgreen;'>Login realizado com sucesso! Bem vindo(a), $nome!</p>";
            } else {
                echo "<p style='color: red;'>Usuário ou senha incorretos.</p>";
            }
        }
    ?>

</body>
</html>