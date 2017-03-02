
<?php

function listaAlunos($conexao){

	$alunos = array();
	$query = "SELECT * FROM aluno"; 
	$resultado = mysqli_query ($conexao, $query);
	while($aluno = mysqli_fetch_assoc($resultado)){
		array_push($alunos, $aluno);
	}
	return $alunos;
}

function removeAlunos($conexao, $id){
	$query = "DELETE FROM aluno WHERE idAluno = {$id}";
	return mysqli_query($conexao, $query);
}

function buscaAluno($conexao, $id){
	$query = "SELECT * FROM aluno WHERE idAluno = {$id}";
	$resultado = mysqli_query($conexao, $query);
	return mysqli_fetch_assoc($resultado);	
}

function alteraAluno($conexao, $id, $vencimento, $matricula, $nome, $email, $rg, $cpf, $dataDeNasc, $telefone, $endereco, $bairro, $cidade){
	$query = "UPDATE aluno SET matricula = '{$matricula}', nome = '{$nome}', email = '{$email}', DataVenc = '{$vencimento}', rg = '{$rg}', cpf = '{$cpf}', dataDeNasc = '{$dataDeNasc}', telefone = '{$telefone}', endereco = '{$endereco}', bairro = '{$bairro}', cidade = '{$cidade}' WHERE idAluno = '{$id}'";
	return mysqli_query($conexao, $query);	
}
?>