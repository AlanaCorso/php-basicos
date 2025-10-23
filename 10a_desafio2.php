<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome do produto:</label>
        <input type="text" name="nome" required> <br>

        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" required> <br>

        <button type="submit">Cadastar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Recebe os valores enviados pelo formulário
            $nome = $_POST['nome'];
            $preco = $_POST['preco'];

            // Valida se o nome não está vazio e se o preço é um número maior que 0
            if (empty($nome)) {
                echo "<p style='color:red;'>Erro: O nome do produto não pode estar vazio.</p>";
            } elseif (!is_numeric($preco)) {
                echo "<p style='color:red;'>Erro: O preço deve ser um número válido.</p>";
            } elseif ($preco <= 0) {
                echo "<p style='color:red;'>Erro: O preço deve ser um número positivo.</p>";
            } else {                // Conecta ao banco de dados
                $servername = "localhost";
                $username = "root"; 
                $password = "Senai@118";
                $dbname = "exercicio";

                $conn = new mysqli($servername, $username, $password, $dbname);


                // Verifica a conexão
                if ($conn->connect_error) {
                    die("Falha na conexão: " . $conn->connect_error);
                }

                $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

                if ($conn->query($sql) === TRUE) {
                echo "<p style='color:Darkgreen;'>Produto cadastrado com sucesso!</p>";
                } 
            }
            
        // Fecha a conexão
        $conn->close();
        }
        
    ?>
</body>
</html>
