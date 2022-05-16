<?php
//header("Location: select.php?mensagem=OK");
include_once "conexao.php";

$tabela = $_POST['tabela'];
$municipio = $_POST['municipio'];

if("$tabela"=="municipio") {
    $sqlDelete = "DELETE FROM ".$tabela." WHERE Partido = '".$municipio."' ";
}$sqlDelete = "DELETE FROM Eleitor WHERE CPF = '".$codigo."' ";


// $sqlDelete = "DELETE FROM Eleitor WHERE CPF = '".$codigo."' ";

if (!mysqli_query($conexao,$sqlDelete))
{
    die('Erro ao excluir o registro: '.mysqli_error($conexao));
}

echo "<CENTER>Registro deletado com sucesso.<br/><CENTER> ";
mysqli_close($conexao);

?>