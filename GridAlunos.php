<link href="css/GridAlunos_Style.css" rel="stylesheet">
<?php include 'Cabecalho.php'; ?>
		<center>
			<h1 style="font-family: 'Montserrat', sans-serif;">Listagem de Alunos</h1>
		</center><br/><br/>
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
<?php include 'Rodape.php'; ?>
