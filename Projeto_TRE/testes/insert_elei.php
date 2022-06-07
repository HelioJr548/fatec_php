<?php

require_once "conexao.php";

$municipio = $_POST['municipio'];
$zona = $_POST['zona'];
$secao = $_POST['secao'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$nome = $_POST['nome'];

// $sqlAlter = "ALTER TABLE users AUTO_INCREMENT = 1";
// mysqli_query($conexao,$sqlAlter);
$sqlInsert = "INSERT INTO Municipio (Municipio) values ('$municipio')";
$sqlInsert = "INSERT INTO Partido (Partido,Sigla) values ('$zona', '$secao')";
$sqlInsert =  "INSERT INTO Candidato (municipio,zona,cpf,rg) values ('$municipio', '$zona', '$cpf', '$rg')";

$rs = mysqli_query($conexao,$sqlInsert)
or
die("Erro ao cadastrar os dados");

echo "Dados cadastrados com sucesso!";

?>