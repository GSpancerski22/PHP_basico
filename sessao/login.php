<?php session_star();   
    //verificar se o usuario esta na sessao 
    if (!isset ($_SESSION["usuario"] ["login"]))    header("Location: index.php")
?>