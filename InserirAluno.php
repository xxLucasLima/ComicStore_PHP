<?php 
    include 'Banco.php';  
    
    $vencimento = $_POST["vencimento"];
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $sexo = $_POST["sexo"];
    $rg = $_POST["rg"];
    $cpf = $_POST["cpf"];
    $dataDeNasc = $_POST["dataNasc"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["logradouro"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];

   
    $sql = "INSERT INTO aluno (dataVenc, matricula, nome, email, sexo, rg, cpf, dataDeNasc, telefone, endereco, bairro, cidade, Estado) VALUES ('$vencimento', '$matricula', '$nome', '$email', '$sexo', '$rg', '$cpf', '$dataDeNasc', '$telefone', '$endereco', '$bairro', '$cidade', '$estado')";

    mysqli_query ($conexao, $sql) or die("deu merda");
    mysqli_close($conexao);
?>
 <p class="bs-success"> O Aluno <?= $nome ?>, foi adicionado com sucesso</p>
<a href="listagem 1.php" class="text-danger"> Voltar </a>