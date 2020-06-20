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
  <script src="./js/parsley.min.js"></script>
</head>

<body>

    <h1>Formulario</h1>
    <!-- --->
    <div class="conatiner">
        <form name="contato" method="post" action="ex1.php" data-parsley-validate>
            <label for="nome"> Preencha nome: </label>
            <input type="text" name="nome" required class="form-control" data-parsley-required-message="Digite seu nome CARALHO!!!!"
            minlength="10" data-parsley-minlength-message="Número minimu de lestra não atingidos ">
           
            </br>
            <label for="email"> Preencha E-mail: </label>
            <input type="email" name="email" required class="form-control" data-parsley-required-message="Digite seu E-mail CARALHO!!!!"
            data-parsley-type-message="Digite seu E-mail CARALHO!!!!" placehode="Digite seu E-mail" 
            minlength="10" data-parsley-minlength-message="Número minimu de lestra não atingidos ">
            
            </br>
            <label for="cpf"> Preencha CPF: </label>
            <input type="number" name="cpf" required class="form-control" data-parsley-required-message="Digite seu CPF CARALHO!!!!"
            minlength="11" data-parsley-minlength-message="Número minimu de lestra não atingidos ">
           
            </br>
            <label for="rg"> Preencha RG: </label>
            <input type="number" name="rg" required class="form-control" data-parsley-required-message="Digite seu RG CARALHO!!!!"
            minlength="11" maxlength="11" data-parsley-minlength-message="Número minimu de lestra não atingidos ">
           <!-- minlength para mostra o minimo de caractere que se pode ser usado 
           maxlength maximo de caracteres que se pode ser usado
           data-parsley-minlength-message uma mensagem caso o minimo de caracteres não for atingidos 
           data-parsley-required-message mensagem caso não seja escrito nada 
            </br>
            <label for="genero"> Selecione o sexo </label>
            <select type="genero"required class="form-control">
                <option></option>
                <option>Femininno</option>
                <option>Masculino</option>
                <option>Outro</option>
            </select>
            </br>
            <button type="submit" class="btn btn-success">Enviar</button>
        </form>
    </div>
</body>
</html>