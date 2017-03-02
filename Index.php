<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sistema de Gestão Escolar </title>
	<style type="text/css">
		@charset "UTF-8";
		@import url('https://fonts.googleapis.com/css?family=Montserrat');
		nav#menu {
			background: #0404B4;
		}
		
		body {
			background-color: #000000;
			color: rgba(0, 0, 0, 1);
			background: url (_imagens/10.jpg) no-repeat center top fixed;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		
		div#interface {
			width: 750px;
			background-color: #CEF6F5;
			margin: -10px auto 0px auto;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, .5);
			padding: 10px;
		}
		
		header#cabecalho h1 {
			text-align: center;
			font-family: 'Montserrat', sans-serif;
			font-size: 50pt;
			color: #2E64FE;
			text-shadow: 1px 1px 1px rgba(0, 0, 0, .6);
			padding: 10px;
			margin-bottom: 10px;
		}
		
		ul#album-fotos {
			width: 700px;
			margin: 0 auto;
			padding: 50px;
			overflow: hidden;
			list-style: none;
		}
		
		ul#album-fotos li {
			float: left;
			width: 200px;
			height: 200px;
			margin: 10px;
			border: 5px solid white;
			background-color: #ffffff;
			box-shadow: 1px 1px 1px rgba(0, 0, 0, .4);
			-webkit-transition: all .4s ease-in;
		}
		
		ul#album-fotos li span {
			opacity: 0;
			color: #ffffff;
			text-shadow: 1px 1px 1px #000000;
			background-color: rgba(0, 0, 0, .3);
			font-size: 9pt;
			line-height: 370px;
			padding: 5px;
		}
		
		ul#album-fotos li:hover {
			-webkit-transform: scale(1.5);
		}
		
		ul#album-fotos li:hover span {
			opacity: 1;
		}
		
		ul#album-fotos li#foto01 {
			background: url('_imagens/ilustracao.jpg') no-repeat;
			background-position: 50% 50%;
			background-size: 400px 400px;
			background-color: #ffffff;
		}
		
		ul#album-fotos li#foto01:hover {
			background-position: 0px 0px;
			background-size: 200px 200px;
		}
		
		ul#album-fotos li#foto02 {
			background: url('_imagens/manga.jpg') no-repeat;
			background-position: 50% 50%;
			background-size: 400px 400px;
			background-color: #ffffff;
		}
		
		ul#album-fotos li#foto02:hover {
			background-position: 0px 0px;
			background-size: 200px 200px;
		}
		
		ul#album-fotos li#foto03 {
			background: url('_imagens/comics.jpg') no-repeat;
			background-position: 50% 50%;
			background-size: 400px 400px;
			background-color: #ffffff;
		}
		
		ul#album-fotos li#foto03:hover {
			background-position: 0px 0px;
			background-size: 200px 200px;
		}
		
		ul#album-fotos li#foto04 {
			background: url('_imagens/cartoon.jpg') no-repeat;
			background-position: 50% 50%;
			background-size: 400px 400px;
			background-color: #ffffff;
		}
		
		ul#album-fotos li#foto04:hover {
			background-position: 0px 0px;
			background-size: 200px 200px;
		}
		
		footer#rodape {
			font-family: 'Montserrat', sans-serif;
			clear: both;
			border-top: 1px solid #606060;
		}
		
		footer#rodape p {
			text-align: center;
		}
	</style>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="_imagens/sge.png" size="16x16" maxlength="8" />
</head>

<body background="_imagens/10.jpg">
	<div id="interface">
		<nav class="navbar navbar-inverse" id="menu">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
					<a class="navbar-brand" href="index.php">SGE</a>
				</div>


				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="Matricula.php">Cadastrar Aluno</a></li>
						<li><a href="GridAlunos.php">Listar Alunos</a></li>

					</ul>
				</div>
			</div>
		</nav>

		<header id="cabecalho">
			<h1>Studio de Artes Ultra Comics<h1>
	</header>

	<h4 style="text-align: center; font-family: 'Montserrat', sans-serif;">Temos aulas com quatro tipos de estilos como mostra nas imagens a seguir </h4>
	<ul id="album-fotos">
	<li id="foto01"><span>Estilo de desenho "Ilustração"</span></li>
	<li id="foto02"><span>Estilo de desenho "Mangá"</span></li>
	<li id="foto03"><span>Estilo de desenho "Comics"</span></li>
	<li id="foto04"><span>Estilo de desenho "Cartoon"</span></li>
	</ul>

	<ul style="font-family: 'Montserrat', sans-serif;">
	<p>Em nossos cursos você vai aprender:</p>
	<li>Introdução a desenho básico</li>
	<li>Princípios de estudo anatômico</li>
	<li>Estrutura facial</li>
	<li>Objetos e sombras</li>
	<li>Perspectiva básica</li>
	</ul>
	<ul><p style="font-family: 'Montserrat', sans-serif;">E muito mais</p></ul>




	<footer id="rodape">
			<p>Rua das Quintas Nº148 - Goiana-PE Centro</br>
			E-mail: ultracomicstudio@gmail.com</br>
			Telefone: 081 99420-4182<br />
			<a href="https://www.facebook.com/StudioDeArteUltraComic/?fref=ts" target="_blank">Facebook</a> |
			<a href="https://twitter.com/stultracomic" target="_blank"> Twitter </a> |
			<a href="http://studiodearteultracomic.blogspot.com.br/" target="_blank"> Blog </a></p>
	</footer>
	</div>	
	</body>
	</html>