<DOCTYPE html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">

  <script src="./js/jquery-3.4.1.min.js"></script>
  <!-- ele é o responsavl pelos comentarios personalizados a algo não sair como se deseja no form --->
  <script src="./js/parsley.min.js"></script>
</head>

<body>

    <h1>Formulario</h1>
    <!-- --->
    <div class="conatiner">
        <?php
            //Reportas erros simples de running
            //error_reporting(E_ERROR | E_WARNING | E_PARSE);
            //reporta todos os erros codigo 
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
            $nome = $email  = $cpf  = $rg = $genero = "";
            if ($_POST){
                //isset verifica se a var foi iniciada 
                //ja o trim retira os espaços em branco que estao sobrando 
                if (isset ($_POST["nome"]))   {$nome     = trim($_POST["nome"]);}
                if (isset ($_POST["email"]))  {$email    = trim($_POST["email"]);}
                if (isset ($_POST["rg"]))     {$rg       = trim($_POST["rg"]);}
                if (isset ($_POST["cpf"]))    {$cpf      = trim($_POST["cpf"]);}
                if (isset ($_POST["genero"])) {$genero   = trim($_POST["genero"]);}
                //VERIFICA SE ESTA VAZIL 
                if (empty ($nome)){
                    //history.back(); para voltar para a tela 
                    echo '<script>alert("Preencha o Nome");history.back();</script>';
                    exit;
                    //ele verifica se o campo email não é um email
                }else if (!filter_var ($email, FILTER_VALIDATE_EMAIL)){

                    echo '<script>alert("Preencha com email valido");history.back();</script>';
                    exit;
                    require "conect.php";
                    //noa se coloca os parametro aqui dentro para evitar invasoa 
                    $sql = 'insert into cliente (nome, email, cpf, rg, genero)
                    values ("$nome", "$email", "$cpf", "$rg", $genero")';

                    $consulta = $pdo->prepare($sql);
                    //ele injetara pela ordem 
                    $consulta = bindParam(1, $nome);
                    $consulta = bindParam(2, $email);
                    $consulta = bindParam(3, $cpf);
                    $consulta = bindParam(4, $rg);
                    $consulta = bindParam(5, $genero);

                    //execultar 
                    if ($consulta->execute()){
                        echo '<p class="alert alert-seccess">Dados Garvados com sucesso</p>';
                    }else{
                        echo '<p class="alert alert-seccess">Preencha oas campos </p>';
                        //ele retornara um erro na posição dois pois é onde o erro do array 
                        echo $consulta->errorInto()[2];
                        
                    }
                }


            }else {
                echo '<p class="alert alert-danger"> Preencha o formulário</p>';
            }
        ?>
    </div>
</body>
</html>