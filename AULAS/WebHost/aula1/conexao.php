<?php 
define('HOST', 'localhost');
define('USUARIO', 'id18842383_root');
define('SENHA','AF~t15~B?Z*uWzTn');
define('DB','id18842383_db_login');

$conexao =mysqli_connect(HOST,USUARIO,SENHA,DB)
or 
die ('Não foi possivel conectar');

echo "A conexão foi efetuada com sucesso!";

?>



<?php

$servidor = "localhost";
$banco = "id18842383_db_login";
$usuario = "id18842383_root";
$senha = "AF~t15~B?Z*uWzTn";
$porta = "3306";

$conn = mysqli_connect($servidor,$usuario,$senha,$banco,$porta);

if (!$conn) {
    die("A conexão falhou: ".mysqli_connect_error());
}
echo "A ocnexão foi efetuada com sucesso";
?>