<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Formulario</h1>
	<form name="form1" method="post" action="wx1.php">
		<p>name=nome do formulario<br>
			method= metodo de envio do dados (get ou post)<br>
			action= arquivos que recebera os dados de envio 
		</p>
		<fieldset>
			<legend>Preencha os campos abaixo:</legend>

			<label for="nome">Seu nome:</label>
			<input type="text" name="nome" size="40" required placeholder="Nome Completo" minlength="5"
			maxlength="40" autofocus>

			<br>

			<label for="genero">Selecione seu genero</label>
			<input type="radio" name="genero" value="M" checked>
			masculino
			<input type="radio" name="genero" value="F">
			feminino

			<br>

			<label for="idade">idade:</label>
			<input type="number" name="idade" placeholder="Digite a sua idade">

			<br>

			<label for="email">
				E-mail
			</label>
			<input type="email" name="email" placeholder="Preencha com um E-mail valido" required size="40">

			<br>

			<label for="estadocivil">
				Selecione o estado civil
			</label>
			<select name="estadocivil">
				<option>Solteiro(a)</option>
				<option>Casado(a)</option>
				<option>nao quer nada com nada</option>
				<option>ouvi K-POP</option>
			</select>

			<br>

			<label name="cursos">Selecione seu curso</label>
			<input type="checkbox" name="medicina">
			Doutô
			<input type="checkbox" name="pm">
			gambé
			<input type="checkbox" name="rapper">
			mano Br0w

			<br>

			<label for="mensagem">Mensagem</label>
			<textarea name="mensagem" placeholder="Digite sua mensagem"
			cols="40"
			rows="5"></textarea>

			<br>

			<button type="reset">Redefinir</button>
			<button type="submit">Enviar Dados</button>
		</fieldset>
	</form>
</body>
</html>