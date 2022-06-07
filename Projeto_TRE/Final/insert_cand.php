<?php

require_once "conexao.php";

$municipio = $_POST['municipio'];
$partido = $_POST['partido'];
$sigla = $_POST['sigla'];
$candidato = $_POST['candidato'];
$cargo = $_POST['cargo'];

$sqlInsert =  "INSERT INTO Candidato (Municipio,Partido,Candidato,Cargo) values ('$municipio', '$partido', '$candidato', '$cargo')";

$rs = mysqli_query($conexao,$sqlInsert)
or
die("Erro ao cadastrar os dados");

echo "Dados cadastrados com sucesso!";

?>
