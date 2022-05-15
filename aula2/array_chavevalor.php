<?php
$array =  [
    'nome' => 'Fatec',
    'sobrenome' => 'Ferraz'
];
echo $array['nome']; //Exibe: Fatec
echo ' ';
echo $array['sobrenome']; //Exibe: Feraz
echo ' ';
// Podemos alterar o valor de uma chave da mesma forma
$array['sobrenome'] = 'Vasconcelos';
echo ' ';
// O array passa a ser ['nome' => 'Fatec', 'sobrenome' => 'Vascpncelos]
echo $array['sobrenome'];
?>