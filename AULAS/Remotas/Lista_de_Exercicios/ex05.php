<!-- 5. Façaum  programa  que  leia  uma  temperatura  em 
graus  Fahrenheit  e  apresente-a  convertida em graus Celsius.
A formula de conversãoé: C = 5.0 ∗(F −32.0)/9.0, sendo C a 
temperatura em Celsius e F a temperatura em Fahrenheit. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio05</title>
</head>
<body>
    <form method="get">
        <label for="f">Temperatura em Farenheit:</label>
        <input type="number" name="f" id="f" step="any" required>
        <input type="submit" value="converter">
    </form><br>

<?php
    $f = $_GET['f'];

    function FtoC($f){
        return 5.0*($f - 32.0)/9.0;
    }
    
    echo "Temperatura em Celsius = ".FtoC($f)."°F";
?>
</body>
</html>