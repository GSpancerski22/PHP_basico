<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulário</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/parsley.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Formulário de Contato</h1>
    <form name="contato" method="post" action="ex1.php" data-parsley-validate>
        <label for="nome">Preencha seu nome:</label>
        <input type="text" name="nome" required class="form-control"
        data-parsley-required-message="Digite seu nome..."
        minlength="10"
        data-parsley-minlength-message="Digite ao menos 10 caracteres...">

        <br>

        <label for="email">Preencha seu e-mail:</label>
        <input type="email" name="email" required class="form-control"
        data-parsley-required-message="Digite um e-mail..."
        data-parsley-type-message="Digite um e-mail válido...">

        <br>

        <label for="genero">Selecione o gênero</label>
        <select name="genero" required class="form-control"
        data-parsley-required-message="Selecione uma opção...">
            <option></option>
            <option>Feminino</option>
            <option>Masculino</option>
            <option>Não definir</option>
        </select>

        <br>

        <button type="submit" class="btn btn-success">
            Enviar Mensagem
        </button>
    </form>
</div>
</body>
</html>