<?php

header("Content-type: text/html; charset-utf-8");

$username = $_GET['nome'];
$data = $_GET['data'];
$email = $_GET['email'];
$mensagem = $_GET['mensagem'];

echo "Nome: $username </br> Data: $data </br> Email: $email </br> Mensagem: $mensagem";
?>