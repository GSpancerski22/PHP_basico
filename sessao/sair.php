<?php 
    //ele apaga a sessao que foi aberto 
    session_start();
    //apaga o usuario 
    unset ($_SESSION["usuario"]);
    //redirecionar para o index 
    header("Location: index.php");