<?php // http://localhost/phpfatec/aula2/switch_nome.php
$nome = 'Fatec';

switch ($nome) {
    case 'Rasmus':
        echo 'O valor de $nome é Rasmus';
        break;
    
    case 'Fatec':
        echo 'O valor de $nome é Fatec';
        break;
        
    case 'Brendan':

    case 'Dennis':
        echo 'O valor de $nome é Brendan ou Dennis';
        break;
    
        default:
        echo 'O valor de $nome não corresponde aos condicionais anteriores';
}


?>