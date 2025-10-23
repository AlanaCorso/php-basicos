<?php
    // Criar variáveis
    $servername = "127.0.0.1";
    $username = "root"; // "Root" só usa em projetos educacionais, não na vida real
    $password = "Senai@118";
    $dbname = "exercicio";

    try {
        // "mysqli" (dentro do php) Tenta criar uma conexão com o BD
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verifica se houve algum erro na conexão
        if ($conn->connect_error) {
            throw new Exception("Falha na conexão:" . $conn->connect_error);
        }

        echo "Conexão realizada com sucesso!";

    } catch (Exception $e) {
        // Exibe uma mensagem de erro amigável
        echo "Erro ao conectar ao banco do dados." . $e->getMessage();
    }

?>
<!-- Para criar o BD -->
<!-- CREATE DATABASE exercicio; -->

<!-- Para criar a Tabela -->
<!-- CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
); -->


