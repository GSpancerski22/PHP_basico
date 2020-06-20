<!DOCTYPE html>
<html>
<head>
	<title> Formulário </title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1> Formulário </h1>
	<form name="form1" method="post" action="ex01.php"> 

		<p> Nome do bagulho <br>
			method - método de envio dos dados (get ou post) <br>
			action - arquivo que receberá ps dadps enviados </p>

		<!-- configurar os campos do fomrulário -->
		<fieldset>
			<legend> <strong> Preencha os campos abaixo: </strong> </legend>
			<label for="nome"> Seu nome: </label>
				<input type="text" name="nome" size="40px" required placeholder="Digite seu nome completo..." minlength="5" maxlength="40" autofocus class="form-control"> <br>
			<!-- Idade -->
			<label for="idade"> Idade: </label>
				<input type="number" name="idade" placeholder="Digite a sua idade..." size="40px" class="form-control"> <br>
			<!-- Email -->
			<label for="email"> E-mail: </label>
			<input type="email" name="email" placeholder="Preecha com um E-mail válido..." required size="40px" class="form-control"> <br>
			<!-- Estado Civíl -->
			<label for="estado-civil" class="form-control"> Estado Civíl: </label>
			<select name="estado-civil" required="">
				<option>			</option>
				<option> Solteiro(a) </option>
				<option> Casado(a) </option>
				<option> Viúvo(a) </option>
				<option> Preso </option>
				<option> Coleira </option>
				<option> Abandonado </option> 
				<option> Transa de costas </option>
				<option> Toma banho de chinelo </option>
			</select> <br>
			<!-- Gênero -->
			<label for="Gênero"> Selecione o Gênero: </label>
			<input type="radio" name="Gênero" value="M" checked> Masculino 
			<input type="radio" name="Gênero" value="F" checked> Feminino <br>
			<!-- Cursos -->
			<label for="cursos"> Selecione o curso: </label> 
			<input type="checkbox" name="informática"> Informática 
			<input type="checkbox" name="culinaria"> Culinária 
			<input type="checkbox" name="tribocomininguem"> Tribo comininguem  <br>
			<!-- Mensagem --> 
			<label for="mensagem"> Mensagem: </label> <br>
			<textarea name="mensagem" placeholder="Digite uma mensagem para nós..." cols="40" rows="5" class="form-control"></textarea> <br>


			<button class="botao 	btn btn-danger"> <strong> Redefinir </strong> </button>
			<button class="btn btn-success"> <strong> Submit </strong> </button>	
			<button class="btn btn-danger"> <strong> Enviar Dados  </strong> </button>
		</fieldset>

		<!-- esse é para prova  -->

	</form>
</div>
</body>
</html>