<?php
//header("Location: select.php?mensagem=OK");
include_once "conexao.php";

$municipio = $_POST['municipio'];
$sqlDelete = "DELETE FROM Municipio WHERE Municipio = '".$municipio."' ";
$sqlDeletes = "DELETE FROM Secao WHERE Municipio = '".$municipio."' ";
$sqlDeletez = "DELETE FROM Zona WHERE Municipio = '".$municipio."' ";
$sqlDeletee = "DELETE FROM Eleitor WHERE Municipio = '".$municipio."' ";
$sqlDeletec = "DELETE FROM Candidato WHERE Municipio = '".$municipio."' ";
if (mysqli_query($conexao,$sqlDeletec) and mysqli_query($conexao,$sqlDeletee) and mysqli_query($conexao,$sqlDeletes) and mysqli_query($conexao,$sqlDeletez) and mysqli_query($conexao,$sqlDelete))
{
    die('Erro ao excluir o registro: '.mysqli_error($conexao));
}

echo "<CENTER>Registro deletado com sucesso.<br/><CENTER> ";
mysqli_close($conexao);

?>