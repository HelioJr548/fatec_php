<!-- 8. Façaum programa que leia um númeroe, caso ele seja positivo, calcule e mostre: • O númerodigitado ao quadrado• A raiz quadrada do númerodigitado -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio08</title>
</head>
<body>
    <form method="get">
        <label for="n1">Digite o valor: </label>
        <input type="number" name="n1" id="n1" required>
        <input type="submit" value="calcular">
    </form> </br>

    <?php
    $n1 = $_GET['n1'];

    if ($n1 >=0) {
        echo "O número $n1 ao quadrado é: ". $n1**2 ."</br>"; 
        echo "A Raíz Quadrada de $n1 é : ".sqrt($n1);
    } elseif($n1 <0) {
        echo "Número Invalido, digite um número positivo.";
    }
    
    ?>
</body>
</html>