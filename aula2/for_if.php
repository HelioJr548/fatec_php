<?php

for ($i = 1; $i <=5; $i++) {
    if ($i ==3) {
        echo 'Mensagem exibida se $i for igual a 3';
        echo '</br>';
    } if ($i == 5) {
        echo 'Mensagem exibida se $i for igual a 5';
    }
}

$nomes = ['Fatec', 'De', 'Vasconcelos', 'Rasmus', 'Brendan'];
for ($i = 0; $i < count($nome); $i++) {
    echo $nomes[$i] . ', ';
}
?>