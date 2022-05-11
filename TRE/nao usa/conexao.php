<?php 
define('HOST', 'localhost');
define('USUARIO', 'id18842383_root1');
define('SENHA',']<_N>P0{igr>kJEd');
define('DB','id18842383_projeto_fatec');

$conexao =mysqli_connect(HOST,USUARIO,SENHA,DB)
or 
die ('Não foi possivel conectar');

echo "A conexão foi efetuada com sucesso!";

?>