<?php
echo "<h1><strong>Dados recuperados com sucesso</strong></h1>";

$arquivo = "isset_post_zona.txt";
if (!file_exists($arquivo)) {
    echo "O arquivo não existe";
} else {
    $fp = fopen($arquivo, 'r');

    while (!feof($fp)) {

        $linha = fgets($fp, 4096); #4096 bytes de dados em cada linha.
        echo  $linha . "</br>";
    }

    fclose($fp);
}

echo "</br>";
echo "</br>";
echo "<form method='post'>";
echo
"<left>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='eleitor.php'>Cadastrar
              </button>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='le_texto_while.php'>ler
              </button>
              <button class='waves-effect waves-light btn type='submit' name='action'  formaction='delete.php'>Delete
              </button>
            </left>
            <br/>
        </form>
                <br/>";
echo "</br>";
echo "</br>";