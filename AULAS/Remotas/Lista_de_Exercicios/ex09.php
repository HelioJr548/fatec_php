<!-- 9. Façaum programa que receba um númerointeiro e verifique se este númeroe par ou ímpar. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio09</title>
</head>
<body>
    <form method="get">
        <label for="n1">Digite um número: </label>
        <input type="number" name="n1" id="n1" required>
        <input type="submit" value="calcular">
    </form> </br>

    <?php
    $n1 = $_GET['n1'];

    if ($n1 % 2 == 0) {
        echo "$n1 é par";
    }else {
        echo "$n1 é ímpar";
    }
    ?>
</body>
</html>