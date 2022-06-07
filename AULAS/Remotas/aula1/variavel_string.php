<?php //http://localhost/phpfatec/variavel_string.php
$nome = "Fatec";
$sobrenome = 'Ferraz';
$numero = 5;

echo $nome; // Fatec
echo "</br>";
echo $nome.$numero; // Fatec5
echo "</br>";

echo $nome . ' $numero ' . $sobrenome; // Fatec $numero Ferraz
echo "</br>";
echo $nome . " $numero " . $sobrenome; // Fatec 5 Ferraz
echo "</br>";
echo $nome. ' ' . $sobrenome; // Fatec Ferraz
echo "</br>";
echo '</br>';

var_dump($nome);
echo '</br>';
var_dump($sobrenome);
echo '</br>';
var_dump($numero);
echo '</br>';
?>