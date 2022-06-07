<?php

require_once "conexao.php";
$municipio = $_POST['municipio'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$zona = $_POST['zona'];
$secao = $_POST['secao'];


// $sqlAlter = "ALTER TABLE users AUTO_INCREMENT = 1";
// mysqli_query($conexao,$sqlAlter);
$sqlInsert = "INSERT INTO Eleitor (Municipio,Zona,Secao,CPF,RG,Nome) values ('$municipio', '$zona', '$secao', '$cpf', '$rg', '$nome')";

$rs = mysqli_query($conexao,$sqlInsert)
or
die("Erro ao cadastrar os dados");

echo "Dados cadastrados com sucesso!";

?>
