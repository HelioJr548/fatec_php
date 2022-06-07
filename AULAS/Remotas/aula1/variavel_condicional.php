<?php //http://localhost/phpfatec/variavel_condicional.php 

/*$var1 = 3;
$var2 = 2;

if ($var1 + $var2 == 5) {
    echo "$var1 + $var2 é igual a 5";
} else {
    echo "$var1 + $var2 não é igual a 5 (?)";
}*/


/* $numero = 5;
if ($numero > 10) {
 echo 'A variável $numero é maior que 10';
} else if ($numero > 7) {
 echo 'A variável $numero é maior que 7';
} else if ($numero == 5) {
 echo 'A variável $numero é igual a 5'; // esse código será executado
} else if ($numero == 3) {
 echo 'A variável $numero é maior ou igual a três';
} else {
 echo 'A variável $numero possui um valor diferente das condicionais anteriores';
}*/

$numero = -5;
if ($numero > 0) {
 echo 'A variável $numero é um número positivo';
} else if ($numero < 0) {
 echo 'A variável $numero é um número negativo'; // Será exibido na tela
 echo '<br>';
} else if ($numero == 0) {
 echo 'A variável $numero é igual a 0';
} else {
 echo 'A variável $numero não é um número';
}
if ($numero != 5) {
 echo 'A variável $numero é diferente de 5'; // Será exibido na tela
 echo '<br>';
} else {
echo 'A variável $numero é igual a 5';
}

/*
$numero = 5;
$nome = 'Fatec';
if ($numero >= 3 && $numero <= 7) {
 echo "A variável $numero é maior ou igual a 3 e menor ou igual a 7";
 echo '<br>';
}
if ($numero == 5 || $numero == 3) {
 echo "A variável $numero é igual a 5 ou igual a 3";
 echo '<br>';
}
if ($numero != 7 && $nome = 'Fatec') {
 echo "A variável $numero é diferente de 7 e a variável $nome é igual a 'Fatec'";
}*/
?>

