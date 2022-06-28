<?php 
define('HOST', 'localhost');
define('USUARIO', 'id18842383_root');
define('SENHA','AF~t15~B?Z*uWzTn');
define('DB','id18842383_diario_de_classe');

$conexao =mysqli_connect(HOST,USUARIO,SENHA,DB)
or 
die ('Não foi possivel conectar');

echo "A conexão foi efetuada com sucesso!";

?>