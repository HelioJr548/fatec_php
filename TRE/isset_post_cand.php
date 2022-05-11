<?php


if (isset($_POST['municipio']) and isset($_POST['partido']) and isset($_POST['candidato']) and isset($_POST['cargo'])) {

    $municipio = $_POST['municipio'];
    $partido = $_POST['partido'];
    $candidato = $_POST['candidato'];
    $cargo = $_POST['cargo'];
    

    $conteudo = "$municipio\n $partido\n $candidato\n $cargo\r\n";

    $arquivo = fopen('isset_post_cand.txt', 'a+');
    fwrite($arquivo, $conteudo);
    fclose($arquivo);
    echo "Municipio: $municipio </br>
    Partido: $partido </br> 
    Candidato: $candidato </br> 
    Cargo: $cargo </br>";

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
