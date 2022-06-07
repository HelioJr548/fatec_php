<?php

require_once "conexao.php";

$codigo = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$data = $_POST['data'];
$mensagem = $_POST['mensagem'];

// $sqlAlter = "ALTER TABLE users AUTO_INCREMENT = 1";
// mysqli_query($conexao,$sqlAlter);

$sqlupdate =  "UPDATE users SET user_name = '$nome',user_email = '$email',user_date = '$data',user_mensagem = '$mensagem' WHERE user_id = '$codigo'";

if(!mysqli_query($conexao,$sqlupdate)){
    die('Erro ao atualizar o registro'.mysqli_error($conexao));
}else{
    echo "Registro atualizado com sucesso! </br>";
}
mysqli_close($conexao);

?>

<!--mysql_query é uma função que verifica se os codigos sql estao corretos-->