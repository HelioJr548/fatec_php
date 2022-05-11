<?php


if (isset($_POST['partido']) and isset($_POST['sigla'])) {

    $partido = $_POST['partido'];
    $sigla = $_POST['sigla'];
    
    $conteudo = "$partido\n $sigla\r\n";

    $arquivo = fopen('isset_post_partido.txt', 'a+');
    fwrite($arquivo, $conteudo);
    fclose($arquivo);
    echo "Partido: $partido </br>
    Sigla: $sigla </br>";

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