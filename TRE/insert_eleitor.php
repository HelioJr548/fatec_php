<?php

require_once "conexao.php";
$municipio = $_POST['municipio'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$zona = $_POST['zona'];
$secao = $_POST['secao'];



// $sqlInsertm = "INSERT INTO Municipio (Municipio,UF) values ('$municipio', '$uf')";
// $sqlInsertz = "INSERT INTO Zona (Municipio,Zona) values ('$municipio', '$zona')";
$sqlInsert = "INSERT INTO Eleitor (Municipio,Zona,Secao,CPF,RG,Nome) values ('$municipio', '$zona', '$secao', '$cpf', '$rg', '$nome')";

$rs = mysqli_query($conexao,$sqlInsert)
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