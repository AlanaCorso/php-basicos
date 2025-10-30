<?php
    // Página de logout (15c_logout.php)
    session_start();
    session_destroy(); //Destrói a sessão do usuário
    header("Location: 15d_login.php");
    exit();
?>