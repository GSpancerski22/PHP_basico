<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulário</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Formulário</h1>
    <form name="form1" method="get" action="ex2.php">
        <label for="nome">
            Digite seu Nome:
        </label>
        <input type="text" name="nome" size="40" required>
        <br>
        <label for="idade">
            Digite sua Idade:
        </label>
        <input type="text" name="idade" size="20" required>
        <br>
        <label for="sexo">
            Digite seu Sexo:
        </label>
        <select name="sexo" required>
            <option></option>
            <option>Masculino</option>
            <option>Feminino</option>
            <option>Inderteminado</option>
        </select>
        <br>    
        <button type="submit">
            Enviar Dados
        </button>
    </form>
</body>
</html>