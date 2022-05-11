<?php

require_once "conexao.php";

$municipio = $_POST['municipio'];
$uf = $_POST['UF'];
$partido = $_POST['partido'];
$sigla = $_POST['sigla'];
$candidato = $_POST['candidato'];
$cargo = $_POST['cargo'];

// $sqlAlter = "ALTER TABLE users AUTO_INCREMENT = 1";
// mysqli_query($conexao,$sqlAlter);
$sqlInsert = "INSERT INTO Municipio (Municipio,UF) values ('$municipio', '$uf')";
$sqlInsert = "INSERT INTO Partido (Partido,Sigla) values ('$partido', '$sigla')";
$sqlInsert =  "INSERT INTO Candidato (municipio,partido,candidato,cargo) values ('$municipio', '$partido', '$candidato', '$cargo')";

$rs = mysqli_query($conexao,$sqlInsert)
or
die("Erro ao cadastrar os dados");

echo "Dados cadastrados com sucesso!";

?>

<!--mysql_query é uma função que verifica se os codigos sql estao corretos-->