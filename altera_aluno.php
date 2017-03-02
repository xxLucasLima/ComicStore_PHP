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
	   color: rgba(0,0,0,1);
		background: url (_imagens/10.jpg) no-repeat center top fixed;
		-webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
	   }
div#interface {
	width:750px;
	background-color: #CEF6F5;
	margin: -10px auto 0px auto;
	box-shadow: 0px 0px 10px rgba(0,0,0,.5);
	padding: 10px;
}
form {
	width: 500px;
	margin: auto;
}

input {
	font-family: sans-serif;
	font-weight: normal;
	font-size: 13pt;
	background-color: rgba(255,255,255,.8)
}

input:hover {
	background-color: #dddddd;
}

legend {
	color: #000000;
	font-weight: bold;
	font-size: 13pt;
	font-family: sans-serif;
}
fieldset {
	border-color: #000000;
	margin: 20px;
}
fieldset#sexo {
	width: 150px;
}
</style>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="icon" type="image/png" href="_imagens/sge.png"  size="16x16" maxlength="8" />
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
<?php
	include 'Listagem.php';
	include 'Banco.php';

	$id = $_GET['id'];
	$aluno = buscaAluno($conexao, $id);	

?>

<form action = "altera_aluno_php.php" method="POST">

<center><h1 style="font-family: 'Montserrat', sans-serif;">Alterar Aluno<h1></center><br />
<br />

<fieldset id="usuario"><legend>Identificação do Usuário</legend>

<input value="<?= $aluno['idAluno']?>" type="hidden" name="id" />

<p><label for="cVenc">Vencimento:</label>	
<select name="vencimento" id="cVenc">
<optgroup label="Melhor data de Vencimento">				
<option value="05">05</option>
<option value="10">10</option>
<option value="15">15</option>
<option value="20">20</option>
<option value="25">25</option>
<option value="30">30</option>
</optgroup>
</p>

</select><br/>
<p><label for="cMatricula">Matricula:</label>
<input value="<?= $aluno['matricula']?>" type="int" name="matricula" id="cMatricula" size="8" maxlength="8" placeholder="Matricula"/></p>

<p><label for:"cNome">Nome:</label>
<input value="<?= $aluno['nome']?>" type="text" name="nome" id="cNome" size="20" maxlength="40" placeholder="Nome Completo"/></p>
<p><label for="cMail">E-mail:</label>
<input value="<?= $aluno['email']?>" type="email" name="email" id="cMail" size="20"maxlength="40" placeholder="E-mail" /></p>
<p><fieldset id="sexo"><legend>Sexo</legend>
						<input type="radio" name="sexo" id="cMasc"/><label for="cMasc">Masculino</label><br/>
						<input type="radio" name="sexo" id="cFem"/><label for="cFem">Feminino</label>
						</fieldset></p>
<p><label for="cRG">RG:</label>	
<input value="<?= $aluno['rg']?>" type="text" name="rg" id="cRG" size="12" maxlength="7" placeholder="RG"/></p>
<p><label for="cCPF">CPF:</label>	
<input value="<?= $aluno['cpf']?>" type="text" name="cpf" id="cCPF" size="12" maxlength="11" placeholder="CPF"/></p>
<p><label for="cDataNas">Data de Nasc.:</label>
<input value="<?= $aluno['dataDeNasc']?>" type="date" name="dataNasc" id="cDataNas" size="12" maxlength="30" placeholder="Data de Nascimento"/></p>
<p><label for="cCont">Telefone:<input type="text" size="2" maxlength="2" placeholder="DDD"/></label> -	
<input  value="<?= $aluno['telefone']?>" type="text" name="telefone" id="cCont" size="9" maxlength="15" placeholder="Número"/></p>
		<fieldset id="endereco"><legend>Endereço do Usuário</legend>
<p><label for="cRua">Logradouro:</label>
<input value="<?= $aluno['endereco']?>" type="text" name="logradouro" id="cRua" size="13" maxlength="80" placeholder="Rua, Av, Trav, ..."/></p>
<p><label for="cBairro">Bairro:</label>	
<input  value="<?= $aluno['bairro']?>" type="text" name="bairro" id="cBairro" size="12" maxlength="30" placeholder="Bairro"/></p>
<p><label for="cCidade">Cidade:</label>	
<input value="<?= $aluno['cidade']?>" type="text" name="cidade" id="cCidade" size="12" maxlength="30" placeholder="Cidade"/></p>
<p><label for="cUF">UF:</label>			
<select name="estado" id="cUF">

<optgroup label="Região Norte">				
<option value="AC">Acre</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="PA">Pará</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="TO">Tocantins</option>
</optgroup>
<optgroup label="Região Nordeste">
<option value="AL">Alagoas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="MA">Maranhão</option>
<option value="PB">Paraíba</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piaui</option>
<option value="RN">Rio Grande do Norte</option>
<option value="SE">Sergipe</option>
</optgroup>
<optgroup label="Região Centro-Oeste">
<option value="GO">Goias</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="DF">Distrito Federal</option>
</optgroup>
<optgroup label="Região Sudeste">
<option value="ES">Espírito  Santo</option>
<option value="MG">Minas Gerais</option>
<option value="SP">SãoPaulo</option>
<option value="RJ">Rio de Janeiro</option>
</optgroup>
<optgroup label="Região Sul">
<option value="PR">Paraná</option>
<option value="RS">Rio Grande do Sul</option>
<option value="SC">Santa Catarina</option>
</optgroup>
</p>
</fieldset>
</select><br/>
<br/>
<br/><input type="submit" value="Alterar">
</form>

</div>
</body>

</html>