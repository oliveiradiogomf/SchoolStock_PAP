<?php
    //inicializa a sessao
    session_start();

    //destroi as variaveis
    unset($_SESSION['iduser']);
    unset($_SESSION['user']);
    session_destroy();

    //redireciona a tela para login
    Header("Location: menu.php");
?>