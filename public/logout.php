<?php

    session_start();
    session_destroy();
    header("Location: ../index.php");
    exit();
//encerra a sessão do usuário, realizando o logout do sistema e redirecionando ele para a página de login
?>