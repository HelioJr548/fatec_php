<!-- 10. Façaum  programa  que  receba  leia  um  inteiro  entre  1  e  7  e  imprima  o  dia  da  semana correspondente a este número. Istoe, domingo se 1, segunda-feira se 2, e assim por diante. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio10</title>
</head>
<body>
    <form method="get">
        <label for="n1">Digite um número: </label>
        <input type="number" name="n1" id="n1" min="1" max="7" required>
        <input type="submit" value="calcular">
    </form> </br>

    <?php
    $n1 = $_GET['n1'];

    switch ($n1) {
        case 1:
            echo "Domingo";
            break;
        case 2:
            echo "Segunda-feira";
            break;
        case 3:
            echo "Terça-feira";
            break; 
        case 4:
            echo "Quarta-feira";
            break; 
        case 5:
            echo "Quinta-feira";
            break; 
        case 6:
            echo "Sexta-feira";
            break; 
        case 7:
            echo "Sábado";
            break; 
        
}
?>
</body>
</html>