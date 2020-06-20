<!DOCTYPE html>
<html>
<head>
	<title>knet Internet</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<meta name="description" content="Site da knet, a melhor internet de Carbonera - Mary Hellen - PR">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<link rel="shortcut icon" href="imagens/icone.png">

	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg">
		<a href="index.php" class="navbar-brand">
			<img src="imagens/logo.png" alt="knet" title="knet">
		</a>



		<div class="collapse navbar-collapse" id="menu">
			<ul class="navbar-nav ml-auto">
				<li>
					<a href="index.php" class="nav-link">Home</a>
				</li>
				<li>
					<a href="index.php?pagina=sobre" class="nav-link">Sobre</a>
				</li>
				<li>
					<a href="index.php?pagina=servicos" class="nav-link">Serviços</a>
				</li>
				<li>
					<a href="index.php?pagina=cliente" class="nav-link">Clientes</a>
				</li>
				<li>
					<a href="index.php?pagina=contatos" class="nav-link btn btn-danger">
						<i class="fas fa-envelope"></i>  Contato</a>
				</li>
			</ul>
		</div>
	</nav>
	
	
		
	<?php
		$pagina = "home";
		// verificar se existe o get
		if ( isset ($_GET["pagina"])) {
			$pagina = $_GET["pagina"];
		}
		// pagina = sobre
		// paginas/sobre.php
		$pagina = "paginas/".$pagina.".php";
		// verifica se o arquivo existe 
		if ( file_exists($pagina)) {
			include $pagina;
		}else{
			include "paginas/erro.php";
		}

	?>

	
		
	<footer>

			
		<p><strong>KNET Internet - A melhor internet de Carbonera</strong></p>
		<br>
		<p>Estrada Douradina 72, Centro - Carnonera - Maria Helena - PR</p>
		<br>
		<p>
			<a href="http://facebook.com">	
				<i class="fab fa-facebook-square"></i>
			</a>
			<a href="http://twitter.com">	
				<i class="fab fa-twitter"></i>
			</a>
			<a href="http://instagam.com">	
				<i class="fab fa-instagram"></i>
			</a>	
		</p>
		


	</footer>

</body>
</html>