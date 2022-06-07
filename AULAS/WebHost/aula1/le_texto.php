<?php



 //Criamos uma função que irá retornar o conteúdo do arquivo.

 function ler(){

    //Variável arquivo armazena o nome e extensão do arquivo.

    $arquivo = "isset_get.txt";

    //Variável $fp armazena a conexão com o arquivo e o tipo de ação.

    $fp = fopen($arquivo, 'r');



    //Lê o conteúdo do arquivo aberto.

    $conteudo = fread($fp, filesize($arquivo));



    //Fecha o arquivo.

    fclose($fp);



    //retorna o conteúdo.

    return $conteudo;



}



echo "<h1><strong>Dados recuperados com sucesso</strong></h1>";



echo nl2br(ler());

?>