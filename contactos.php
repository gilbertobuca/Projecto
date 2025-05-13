<?php

include_once('config.php');

if(isset($_POST['submit']))
{
	//print_r('Nome: ' . $_POST['nome']);
    //print_r('<br>');
    //print_r('E-mail: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Categoria: ' . $_POST['categoria']);
    //print_r('<br>');
    //print_r('Cópia: ' . $_POST['copia']);
    //print_r('<br>');
    //print_r('Humano: ' . $_POST['humano']);
    //print_r('<br>');
    //print_r('Mensagem: ' . $_POST['mensagem']);
    //print_r('<br>');

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$categoria =  $_POST['categoria'];
	$copia =  $_POST['copia'];
	$humano = $_POST['humano'];
	$mensagem = $_POST['mensagem'];

	$result = mysqli_query($conexao, "INSERT INTO mensagens(nome,email,categoria,copia,humano,mensagem) 
	VALUES ('$nome','$email','$categoria','$copia','$humano','$mensagem')");
}

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Biblioteca Virtual | Contactos</title>
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
								<li><a href="literatura.html">literatura</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li><a href="Principal.php" class="button primary">Home</a></li>
			</ul>
		</nav>
	</header>

			<!-- Banner -->
			<section class="novo">
				<div class="content">
					<div class="form-header">
						<div class="form-title">
							<blockquote>
								<header>Ei! Que bom ter você aqui! Fale com a gente pelo formulário ou diretamente pelos nossos canais abaixo. Estamos prontos para ajudar!</header>
							</blockquote>
							<h5>Contacte-nos através:</h5>
							<ul>
								<li>📧 <strong>Email:</strong> <a href="mailto:colegiojpauloii@gmail.com">colegiojpauloii@gmail.com</a></li>
								<li>📞 <strong>Telefones:</strong> 924 353 543 | 925 563 536</li>
								<li>📍 <strong>Endereço:</strong> Rua das Mangueiras, nº 22 — Cabinda, Angola</li>
							</ul>
						</div>
					</div>
					<h2>Nosso horário</h2>
					<ul>
						<li>08h às 15h (mas online estamos quase sempre por aqui!)</li>
					</ul>

					<!-- Form -->
					<div class="formulario">
						<section>
							<header style="font-size: x-large; font-family: Georgia, 'Times New Roman', Times, serif; text-align: center;">Caixa de Mensagem</header>
							<hr>
							<form action="contactos.php" method="POST">
								<div class="row gtr-uniform gtr-50">
									<div class="col-6 col-12-xsmall">
										<input type="text" name="nome" id="nome" value="" placeholder="Nome completo" required/>
									</div>
									<div class="col-6 col-12-xsmall">
										<input type="email" name="email" id="email" value="" placeholder="E-mail" required/>
									</div>
									<div class="col-12">
										<select name="categoria" id="categoria" required>
											<option value="">- Categoria -</option>
											<option value="1">Questões</option>
											<option value="2">Sugestões</option>
										</select>
									</div>
									<div class="col-4 col-12-medium">
										<input type="radio" id="priority-low" name="priority" checked>
										<label for="priority-low">Prioridade mínima</label>
									</div>
									<div class="col-4 col-12-medium">
										<input type="radio" id="priority-normal" name="priority">
										<label for="priority-normal">Prioridade média</label>
									</div>
									<div class="col-4 col-12-medium">
										<input type="radio" id="priority-high" name="priority">
										<label for="priority-high">Prioridade máxima</label>
									</div>
									<div class="col-6 col-12-medium">
										<input type="checkbox" id="copia" name="copia">
										<label for="copia">Envie para mim uma cópia desta mensagem</label>
									</div>
									<div class="col-6 col-12-medium">
										<input type="checkbox" id="humano" name="humano" checked>
										<label for="humano">Sou um humano e não um robô</label>
									</div>
									<div class="col-12">
										<textarea name="mensagem" id="mensagem" placeholder="Escreva a sua mensagem" rows="6" required></textarea>
									</div>
									<div class="col-12">
										<ul class="actions">
											<li><input type="submit" name="submit" id="submit" value="Enviar mensagem" class="primary" /></li>
											<li><input type="reset" value="Recomeçar" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
					</div>
				</div>
			</section>

			<!-- Footer -->
			<footer id="footer">
				<p>Siga-nos e fique por dentro!</p>
				<ul class="icons">
					<li><a href="https://m.facebook.com" class="icon brands alt fa-facebook-f" target="_blank"><span class="label">Facebook</span></a></li>
					<li><a href="https://www.linkedin.com" class="icon brands alt fa-linkedin-in" target="_blank"><span class="label">LinkedIn</span></a></li>
					<li><a href="https://www.instagram.com" class="icon brands alt fa-instagram" target="_blank"><span class="label">Instagram</span></a></li>
					<li><a href="https://github.com/#hero" class="icon brands alt fa-github" target="_blank"><span class="label">GitHub</span></a></li>
				</ul>
				<ul class="copyright">
					<li>&copy; Biblioteca Virtual. Todos os direitos reservados.</li>
				</ul>
			</footer>

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
