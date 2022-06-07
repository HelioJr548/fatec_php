<!-- 7. Façaum programa que leia um númerocaso seja positivo, calcule a raiz quadrada do número. Caso o númeroseja negativo, mostre uma mensagem dizendo que o númeroé invalido. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio07</title>
</head>
<body>
    <form method="get">
        <label for="n1">Digite o valor: </label>
        <input type="number" name="n1" id="n1" required>
        <input type="submit" value="calcular">
    </form> <br>

    <?php
    $n1 = $_GET['n1'];

    if ($n1 >=0) {
        echo "Raíz Quadrada de $n1 é : ".sqrt($n1);
    } elseif($n1 <0) {
        echo "Número Invalido";
    }
    
    ?>
</body>
</html>