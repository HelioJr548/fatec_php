<?php
$dados = [
    'nome' => 'Fatec',
    'sobrenome' => 'Ferraz',
    'idade' => 21
];
foreach ($dados as $chave => $valor) {
    echo $chave . ': ' . $valor . '</br>';
}
?>