<?php
$numero = 5;
switch ($numero) {
    case 1:
        echo 'O valor de $numero é 1';
        break;
    case 3:
    case 4:
        echo 'O valor de $numero e 3 ou 4';
        break;
    case 5:
        echo 'O valor de $numero é 5, switch case igual a 5'; // Será exibido na tela
        break;
    default:
        echo 'O valor de $numero não corresponde aos condicionais anteriores';
        break;
}
?>