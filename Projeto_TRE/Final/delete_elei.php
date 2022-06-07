<?php
//header("Location: select.php?mensagem=OK");
include_once "conexao.php";

$cpf = $_POST['cpf'];
$sqlDelete = "DELETE FROM Eleitor WHERE CPF = '".$cpf."' ";

if (!mysqli_query($conexao,$sqlDelete))
{
    die('Erro ao excluir o registro: '.mysqli_error($conexao));
}

echo "<CENTER>Registro deletado com sucesso.<br/><CENTER> ";
mysqli_close($conexao);

?>