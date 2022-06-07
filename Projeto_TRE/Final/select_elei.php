<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style=text-align:center;>
    <?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('America/Sao_Paulo');
"text-align:center;";
include_once "conexao.php";

echo "</br><br>";

$sqlSelect = "SELECT * FROM Eleitor";
$rs = mysqli_query($conexao,$sqlSelect);

if (mysqli_num_rows($rs)>0){
    //dados de saida de cada linha
    //mysqli_fetch_assoc() busca o resultado de uma linha e o coluna numa matriz associativa, podendo selecionar pelo nome do campo.
    while($row = mysqli_fetch_assoc($rs)){
        
        echo "Municipio: ".$row["Municipio"].
        " | Zona: ".$row["Zona"].
        " | Seção: ".$row["Secao"].
        " | CPF: ".$row["CPF"].
        " | RG: ".$row["RG"].
        " | Nome: ".$row["Nome"].
        "</br>";

        echo str_repeat("-", 100)."</br>";
    }
}else {
    echo "Não foram encontrados registros cadastrados";
}
mysqli_close($conexao);

?>

</body>
</html>

