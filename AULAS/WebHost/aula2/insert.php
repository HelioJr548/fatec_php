<?php

require_once "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];

// $sqlAlter = "ALTER TABLE users AUTO_INCREMENT = 1";
// mysqli_query($conexao,$sqlAlter);

$sqlInsert =  "INSERT INTO users (user_name,user_email,user_date,user_mensagem) values ('$nome', '$email', '$data', '$mensagem')";

$rs = mysqli_query($conexao,$sqlInsert)
or
die("Erro ao cadastrar os dados");

echo "Dados cadastrados com sucesso!";

?>

<!--mysql_query é uma função que verifica se os codigos sql estao corretos-->