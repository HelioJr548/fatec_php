<?php

require_once "conexao.php";

$municipio = $_POST['municipio'];
$uf = $_POST['uf'];
$zona = $_POST['zona'];
$secao = $_POST['secao'];

$sqlInsertm = "INSERT INTO Municipio (Municipio,UF) values ('$municipio', '$uf')";
$sqlInsertz = "INSERT INTO Zona (Municipio,Zona) values ('$municipio', '$zona')";
$sqlInserts = "INSERT INTO Secao (Municipio,Zona,Secao) values ('$municipio', '$zona', '$secao')";

$rsm = "SELECT * FROM Municipio";
$rsM = mysqli_query($conexao, $rsm);

$rsz = "SELECT * FROM Zona";
$rsZ = mysqli_query($conexao, $rsz);

$rss = "SELECT * FROM Secao";
$rsS = mysqli_query($conexao, $rss);

if(mysqli_fetch_assoc($rsM)== "$municipio"){
    $rs = mysqli_query($conexao,$sqlInsertm) and mysqli_query($conexao,$sqlInsertz) and mysqli_query($conexao,$sqlInserts);
    echo "Dados cadastrados com sucesso!";
    
}elseif(mysqli_fetch_assoc($rsM)!= "$municipio"){
    $rs = mysqli_query($conexao,$sqlInserts);
}

?>