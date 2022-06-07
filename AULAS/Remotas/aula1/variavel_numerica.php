<?php // http://localhost/phpfatec/variavel_numerica.php

$var1 = 1.5; // Exibe: 1.5
$var2 = 3 + 2; // Exibe: 5
$var3 = $var2 - $var1; // Exibe: 3.5, resultado de 5 - 1,5
$var4 = 9 * $var2; // Exibe: 20, resultado de 4 vezes 5
$var5 = 5 / 2; // Exibe: 2.5

echo "$var1";
echo '</br>';
echo "$var2";
echo '</br>';
echo "$var3";
echo '</br>';
echo "$var4";
echo '</br>';
echo "$var5";
echo '</br>';

var_dump($var1);
echo '</br>';
var_dump($var2);
echo '</br>';
var_dump($var3);
echo '</br>';
var_dump($var4);
echo '</br>';
var_dump($var5);
echo '</br>';
?>