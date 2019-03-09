<!DOCTYPE html>
<html>
<head>
	<title>Pizza Hot</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <base href="http://<?=$_SERVER['SERVER_NAME'] . $_SERVER['SCRIPT_NAME']?>">
    <!-- <base href="http://localhost/pizzahot"> -->

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- https://daneden.github.io/animate.css/ -->
	<link rel="stylesheet" type="text/css" href="css/lightbox.min.css">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/jquery.cycle2.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<!-- https://wowjs.uk/ -->
	<script type="text/javascript" src="js/lightbox.min.js"></script>
	<script>
		new WOW().init();
	</script>
</head>
<body>
	<header>
		<div class="container">
			<a href="index.php" title="Home" class="header-logo">
				<img src="imagens/logo.png" class="wow fadeInLeft" alt="Pizza Hot" title="Pizza Hot">
			</a>

			<button type="button" class="header-button" onclick="menu()"><!-- ao clicar nesse botão ativa a função chamada menu -->
				<i class="fas fa-bars"></i>
			</button>

			<nav class="header-menu wow fadeInRight">
				<ul>
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="sobre">Sobre</a>
					</li>
					<li>
						<a href="cardapio">Cardápio</a>
					</li>
					<li>
						<a href="contato">Contato</a>
					</li>
				</ul>
			</nav>


		</div>
	</header>

	<div class="cycle-slideshow">
		<img src="imagens/banner.jpg" class="w-100">
		<img src="imagens/banner2.jpg" class="w-100">
	</div>

	<main class="container">
		<?php

			$pagina = "home";

			//verificar se o param está sendo enviado
			if (isset($_GET["param"])){
				$pagina = trim ($_GET["param"]);

			}

			$pagina = "paginas/".$pagina.".php"; //caminho da pasta/arquivo

			if(file_exists($pagina)){//se o arquivo existir
				include $pagina; //inclui a página

			}else{//se não existir inclui a página de erro
				include "paginas/erro.php";
			}
		?>
	</main>

	<footer>
		<img src="imagens/logo.png" alt="Pizza Hot" title="Pizza Hot">
		<p>Siga-nos nas redes sociais: </p>
		<p>
			<a href="http://facebook.com/dfoksdods">
				<i class="fab fa-facebook-square fa-2x"></i>
			</a>
			<a href="http://instagram.com/fkpsdhfiods">
				<i class="fab fa-instagram fa-2x"></i>
			</a>
			<a href="http://youtube.com/fkpsdfdsfsddhfiods">
				<i class="fab fa-youtube fa-2x"></i>
			</a>
		</p>
		<p>
			Desenvolvido com <i class="fas fa-heart"></i> por Giovanni Bússola - Arquivos: 
			<a href="https://github.com/Vengicx/Pos-Alfa-2019-2020">
				GitHub
				<i class="fab fa-github fa-1x"></i>
			</a>
		</p>

	</footer>

	<script type="text/javascript">
		function menu() {
			$(".header-menu").toggle();//toggle é alternar, então alterna entre mostrar e não mostrar
			// $(".header-menu") é o que vai pegar o elemento na página com a classe "header-menu"
		}

	</script>

</body>
</html>