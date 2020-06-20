<?php 
    //iniciar sessao 
    session_start();
    //verificar se existe um post 
    if ($_POST){
        $login = $senha = "";
        foreach($_POST as $key => $value){
            echo "<p>Chave: $key - Valor: $value</p>";
            if (isset ($_POST[$key])){
                $$key = trim($value);
            }
        }
        if (empty ($login)){
            echo "Preencha o login";
        }else if(empty ($senha)){
            echo "Preencha a senha"
        }else {
            $_SESSION["usuario"] = 
            array("login"=>$login,"senha"=>$senha);
            header("Location: home.php");
        }
        //mostra o conteudo de um array print_r($_POST);

    }else {
        //por naõ preencher o form 
        //redireciona para o index 
        header("Location: index.php");
        //para usar o header não pode ter texto na pagina
    }