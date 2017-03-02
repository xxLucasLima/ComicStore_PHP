<?php 
    include 'Banco.php';  
    include 'Listagem.php';
    
    $id = $_POST["id"];
    $vencimento = $_POST["vencimento"];
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $dataDeNasc = $_POST["dataNasc"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["logradouro"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];

   
    if(alteraAluno($conexao, $id, $vencimento, $matricula, $nome, $email, $rg, $cpf, $dataDeNasc, $telefone, $endereco, $bairro, $cidade)){
?>
 <p class="bs-success"> O Aluno <?= $nome ?>, foi alterado com sucesso</p>
 <a href="listagem 1.php" class="text-danger"> Voltar </a>

<?php
} else {
?>

<p class="bs-success"> O Aluno <?= $nome ?>, Deu erro otaroh</p>

<?php
 };

  ?>