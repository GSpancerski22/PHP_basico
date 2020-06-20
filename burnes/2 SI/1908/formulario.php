<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>Formulário</h1>
	<form name="form1" method="get" action="ex2.php">
		<label for="nome">
			Digite seu nome:
		</label>
		<input type="text" name="nome" size="40" required>
		<br>
		<label for="idade">
			Digite sua idade:
		</label>
		<input type="text" name="idade" size="10" required>
		<br>

		<label for="sexo">
			Selecione o Gênero
		</label>
		<select name="sexo" required>
			<option></option>
			<option>Indeterminado</option>
			<option>Masculino</option>
			<option>Feminino</option>
		</select>
		<br>

		<button type="submit">
			Enviar Dados
		</button>		
	</form>
</body>
</html>