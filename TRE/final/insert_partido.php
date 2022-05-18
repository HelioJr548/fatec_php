<?php

require_once "conexao.php";

// $municipio = $_POST['municipio'];
$partido = $_POST['partido'];
$sigla = $_POST['sigla'];
// $candidato = $_POST['candidato'];
// $cargo = $_POST['cargo'];

// $sqlInsertm = "INSERT INTO Municipio (Municipio,UF) values ('$municipio', '$uf')";

$sqlInsertp = "INSERT INTO Partido (Partido,Sigla) values ('$partido', '$sigla')";

// $sqlInsertc =  "INSERT INTO Candidato (Municipio,Partido,Candidato,Cargo) values ('$municipio', '$partido', '$candidato', '$cargo')";


$rs = mysqli_query($conexao,$sqlInsertp)
or
die("Erro ao cadastrar os dados");

echo "Dados cadastrados com sucesso!";

?>
