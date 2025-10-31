<?php
    // Página restrita (15b_restrita.php)
    session_start();
    
    // Verifica se o usuário está logado
    if (!isset($_SESSION['nome'])) {
        header("Location: 15d_login.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body style="background-color: <?php echo $_SESSION['cor']; ?>">
    <h2>Bem-vindo(a), <?php echo $_SESSION['nome']; ?>!</h2>
    <p>Esta é uma página restrita com sua cor favorita, apenas para usuários logados.</p>
    <a href="15d_logout.php">Logout</a>
</body>
</html>