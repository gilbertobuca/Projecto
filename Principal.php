<?php
	session_start();
	//print_r($_SESSION);
	
	if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
		unset($_SESSION['email']);
		unset($_SESSION['senha']);
		header('Location: form.php');
	}

	$logado = $_SESSION['email']
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Biblioteca Virtual | Principal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload landing">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1 id="logo"><a href="Principal.php">Biblioteca Virtual</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="Principal.php">Home</a></li>
							<li>
								<a href="Livros.html">Livros</a>
								<ul>
									<li><a></a></li>
									<li>
										<a href="#">Categorias</a>
										<ul>
											<li><a href="cej.html">Ciências economico-jurídaicas</a></li>
											<li><a href="cfb.html">Ciências físicas e biolólicas</a></li>
											<li><a href="comunicacao.html">Comunicação Social</a></li>
											<li><a href="contabilidade.html">Contabilidade e gestão</a></li>
											<li><a href="desenho.html">Desenho e Projecto</a></li>
											<li><a href="electricidade.html">Energia e instalações electricas</a></li>
											<li><a href="eletronica.html">Eletronica e telecomunicações</a></li>
											<li><a href="filosofia.html">Filosofia</a></li>
											<li><a href="informatica.html">Informática</a></li>
											<li><a href="literatura.html">Literatura</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="contactos.php">Contactos</a></li>
							<li><a href="sair.php" class="button primary">Terminar Secção</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>
							<h2>Seja bem-vindo .</h2>
							<p>Esperamos que tenha uma experiência agradável.</p>
						</header>
						<span class="image"><img src="images/livro.jpg" alt="" /></span>
					</div>
					<a href="#one" class="goto-next scrolly">Next</a>
				</section>

			<!-- One -->
				<section id="one" class="spotlight style1 bottom">
					<span class="image fit main"><img src="images/imagem.jpeg" alt="" /></span>
					<div class="content">
						<div class="container">
							<div class="row">
								<div class="col-4 col-12-medium">
									<header>
										<h2>Instituto Politécnica João Paulo II</h2>
									</header>
								</div>
								<div class="col-4 col-12-medium">
									<p>O Instituto Politécnica João Paulo II é uma escola privada que está situada em Angola, na provincia de Cabinda, na Rua das Mangueiras, em homenagem ao Papa João Paulo II que fez uma visita a este país. </p>
								</div>
								<div class="col-4 col-12-medium">
									<p>Este é um colégio bem conhecido pelos abitantes desta área e muito elogiado quando no auge.	</p>
								</div>
							</div>
						</div>
					</div>
					<a href="#two" class="goto-next scrolly">Next</a>
				</section>

			<!-- Two -->
				<section id="two" class="spotlight style2 right">
					<span class="image fit main"><img src="images/biblio1.jpg" alt="" /></span>
					<div class="content">
						<header>
							<h2>Biblioteca</h2>
						</header>
						<p>Esta biblioteca foi criada com o intuito de suprimir algumas necessidades do colégio quanto ao aprendizado. Como a biblioteca escolar é pequena e tem um estoque de livros muito limitado, a biblioteca vem para espandir o alcance dos alunos a informaçõs relevantes e estudos da materia dada em aulas.</p>
						<ul class="actions">
							<li><a href="#" class="button">Saiba mais</a></li>
						</ul>
					</div>
					<a href="#three" class="goto-next scrolly">Next</a>
				</section>

			<!-- three -->
				<section id="three" class="wrapper style1 special fade-up">
					<div class="container">
						<header class="major">
							<h2>“ O conhecimento deve ser livre e acessível. A biblioteca virtual transforma o aprendizado em uma jornada sem fronteiras. ”</h2>
							<p>Afrase acima é uma citação de Nelson Mandela em 2004 para enfatizar o quão poderosa pode ser uma biblioteca virtual</p>
						</header>
						<div class="box alt">
						</div>
						<footer class="major">
							<ul class="actions special">
								<li><a href="contactos.php" class="button">Contacte-nos</a></li>
							</ul>
						</footer>
					</div>
				</section>


			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a><span class="label"></span></a></li>
						<li><a href="https://m.facebook.com" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="https://www.linkedIn.com/&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2f" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>
						<li><a href="https://www.instagram.com" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="https://github.com/#hero" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						<li><a span></span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; Biblioteca Virtual.Todos os direitos reservados</li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/script.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>