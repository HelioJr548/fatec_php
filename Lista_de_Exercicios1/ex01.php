<!-- 1. Faça um programa que leia um número inteiro e o imprima-->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio01</title>
</head>
<body>
    <form method="get">
        <div>
            <label for="number">Digite um número:</label>
            <input type="number" name="number" id="number" required>
            <input type="submit" value="verificar">
        </div><br>
    </form>
    
<?php
    $n = intval($_GET['number']);

    echo "O numero $n é Inteiro\n";
?>
    
</body>
</html>

