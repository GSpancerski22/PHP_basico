<!DOCTYPE html>
<html>
<head>
	<title>Formulário</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1>Formulário</h1>
	<form name="form1" method="post" action="ex1.php">
		<p>name - nome do formulário<br>
			method - método de envio dos dados (get ou post)<br>
			action - arquivo que receberá os dados enviados
		</p>
		<fieldset>
			<legend>Preencha os campos abaixo:</legend>

			<label for="nome">
				Seu nome:
			</label>
			<input type="text" name="nome"
			size="40" required 
			placeholder="Digite seu nome completo" minlength="5"
			maxlength="40" autofocus
			class="form-control">

			<br>

			<label for="genero">
				Selecione o Gênero:
			</label>
			<input type="radio" 
			name="genero" value="M"
			checked>
			Masculino
			<input type="radio"
			name="genero" value="F">
			Feminino

			<br>

			<label for="idade">
				Idade:
			</label>
			<input type="number" name="idade" placeholder="Digite a sua idade"
			class="form-control">

			<br>

			<label for="email">
				E-mail:
			</label>
			<input type="email" name="email" placeholder="Preencha com um e-mail válido" required
			class="form-control">

			<br>

			<label for="estadocivil">
				Selecione um estado Civil
			</label>
			<select name="estadocivil" required class="form-control">
				<option>Solteiro(a)</option>
				<option>Casado(a)</option>
				<option>Viúvo(a)</option>
				<option>Ajuntado(a)</option>
				<option>Separado(a)</option>
			</select>

			<br>

			<label name="cursos">
				Selecione os Cursos
			</label>
			<input type="checkbox" name="moda"> Moda
			<input type="checkbox" name="pd">
			Prendas Domésticas
			<input type="checkbox" name="culinaria">
			Culinária

			<br>

			<label for="mensagem">
				Mensagem:
			</label>
			<textarea name="mensagem" placeholder="Digite uma mensagem" cols="50" rows="8" 
			class="form-control"></textarea>

			<br>

			<button type="reset" 
			class="btn btn-danger">
				Redefinir
			</button>
			<button type="submit" 
			class="btn btn-success">
				Enviar Dados
			</button>
		</fieldset>
	</form>
	</div>
</body>
</html>