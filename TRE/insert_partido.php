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


// $partido = $_POST['partido'];
// $sigla = $_POST['sigla'];
// $candidato = $_POST['candidato'];
// $cargo = $_POST['cargo'];

// $cpf = $_POST['cpf'];
// $rg = $_POST['rg'];
// $nome = $_POST['nome']

// $sqlAlter = "ALTER TABLE users AUTO_INCREMENT = 1";
// mysqli_query($conexao,$sqlAlter);

// $sqlInserte =  "INSERT INTO Eleitor (Municipio,Zona,Secao,CPF,RG,Nome,) values ('$municipio', '$zona', '$secao', '$cpf', '$rg', $nome)";

// $sqlInsertp = "INSERT INTO Partido (Partido,Sigla) values ('$partido', '$sigla')";

// $sqlInsertc =  "INSERT INTO Candidato (Municipio,Partido,Candidato,Cargo) values ('$municipio', '$partido', '$candidato', '$cargo')";




<!--mysql_query é uma função que verifica se os codigos sql estao corretos-->