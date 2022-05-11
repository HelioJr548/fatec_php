<?php


if (isset($_POST['municipio']) and isset($_POST['zona']) and isset($_POST['secao']) and isset($_POST['cpf']) and isset($_POST['rg']) and isset($_POST['nome'])) {

    $municipio = $_POST['municipio'];
    $zona = $_POST['zona'];
    $secao = $_POST['secao'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $nome = $_POST['nome'];

    $conteudo = "$municipio\n $zona\n $secao\n $cpf\n $rg\n $nome\r\n";

    $arquivo = fopen('isset_post_muni.txt', 'a+');
    fwrite($arquivo, $conteudo);
    fclose($arquivo);
    echo "Municipio: $municipio </br>
    Zona: $zona </br> 
    secao: $secao </br> 
    cpf: $cpf </br>
    RG: $rg </br> 
    Nome: $nome </br>" ;

}
echo "</br>";
echo "</br>";
echo "<form method='post'>";
echo
"<left>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='index.php'>Cadastrar
              </button>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='le_texto.php'>ler
              </button>
            </left>
            <br/>
        </form>
                <br/>";
echo "</br>";
echo "</br>";
