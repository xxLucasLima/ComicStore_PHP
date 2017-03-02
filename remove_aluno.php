<?php
	include 'Banco.php';
	include 'ListagemA.php';

	$Id = $_GET['id'];
	removeAlunos($conexao, $Id);
	header("Location: listagem 1.php?removido=true");
	die();
?>

