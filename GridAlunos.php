<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Sistema de Gestão Escolar </title>
	<style>
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
		
		table#tabelalistagem td {
			border: 2px solid #606060;
			padding: 10px;
			text-align: center;
			background-color: #cecece;
			font-size: 13pt;
			font-weight: bold;
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

		<center>
			<h1 style="font-family: 'Montserrat', sans-serif;">Listagem de Alunos<h1></center><br />
<br />

<?php include 'Listagem.php';
	  include "Banco.php";
?>
<?php if(array_key_exists("removido", $_GET) && $_GET["removido"]==true){ ?>

	<p class="bg-success">Aluno apagado com sucesso</p>

<?php } ?>

<table class="table" border="1" align='center'>
	<tr>
		<th>Id </th>
		<th>Nome</th>
		<th>Email</th>
		<th>CPF</th>
		<th>Matricula</th>
		<th>Contato</th>
		<th></th>
	</tr>
		<?php

			$alunos = listaAlunos($conexao);
			foreach ($alunos as $aluno) { ?>
	<tr>
		<td><?php echo $aluno['idAluno']; ?></td>
		<td><?php echo $aluno['nome']; ?></td>
		<td><?php echo $aluno['email']; ?></td>
		<td><?php echo $aluno['cpf']; ?></td>
		<td><?php echo $aluno['matricula']; ?></td>
		<td><?php echo $aluno['telefone']; ?></td>
		<td>
			<a href="remove_aluno.php?id=<?=$aluno['idAluno']?>" class="text-danger"> Remover </a>
			<a href="altera_aluno.php?id=<?=$aluno['idAluno']?>" class="text-danger"> Editar </a>
		</td>	
	</tr>
	<?php
		}
	 ?>

	</table>	
	
</body>
</html>