<?php

function teste($nome) {
    if ($nome == 'Fatec') {
        echo 'Mensagem exibida se $nome
        for igual a Fatec, em seguida para execução da função';
        return;
    }
    echo 'A função continua se $nome não for igual a Fatec';
}
teste('Fatec'); // Exibe apenas o primeiro echo
echo '</br> ';
teste('Rasmus'); // Exibe apenas o segundo echo
?>