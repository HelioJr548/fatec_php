<!-- 2. Façaum programa que leia um númeroreal e o imprima -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio02</title>
</head>
<body>
    <form method="get">
        <div>
            <label for="n">Digite um número:</label>
            <input type="number" name="n" id="n" step="any" required>
            <input type="submit" value="verificar">
        </div><br>
    </form>
    
<?php

    $n = floatval($_GET['n']);

    echo "O numero $n é real";

?>
    
</body>
</html>