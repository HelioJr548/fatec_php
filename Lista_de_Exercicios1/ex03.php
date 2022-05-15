<!-- 3. Façaum programa que leia trêsvalores inteiros e imprima
a soma deles. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio03</title>
</head>
<body>
    <form action="soma_valores.php" method="get">
        <div>
            <label for="n1">Digite um número:</label>
            <input type="number" name="n1"  id="n1"  required>
        </div><br>
        <div>
            <label for="n2">Digite um número:</label>
            <input type="number" name="n2" id="n2"  required>
        </div><br>
        <div>
            <label for="n3">Digite um número:</label>
            <input type="number" name="n3" id="n3"  required>
            <input type="submit" value="Somar Valores">
        </div><br>
    </form> <br>

    <?php

    $n1 = $_GET['n1'];
    $n2 = $_GET['n2'];
    $n3 = $_GET['n3'];

    function Soma($n1 , $n2, $n3){
        return $n1 + $n2 + $n3;
    }

    echo "<b>Soma dos valores</b> </br> $n1 + $n2 + $n3 = ".Soma($n1 , $n2, $n3);
    
    
?>

</body>
</html>