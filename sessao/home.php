<?php 
    include "login.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home do sis</h1>
    <?php //print_r($_SESSION);
    //ele define onde ele quer pegar e o que ele quer pegar 
        $usuario = $_SESSION["usuario"]["login"];
    ?>

    <p><a href="sair.php">Sair do sistema </a></p>
</body>
</html>