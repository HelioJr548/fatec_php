<!-- 4. Façaum  programa  que  leia  uma  temperatura  emgraus
Celsius  e  apresente-a  convertida  em graus  Fahrenheit.  A
formula  de conversãoé:  F  =  C∗(9.0/5.0)+32.0,  sendo  F  a 
temperatura  em Fahrenheit e C a temperatura em Celsius. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio04</title>
</head>
<body>
    <form method="get">
        <label for="c">Temperatura em Celsius:</label>
        <input type="number" name="c" id="c" step="any" required>
        <input type="submit" value="converter">
    </form><br>

<?php
    $c = $_GET['c'];

    function CtoF($c){
        return ($c*9.0/5.0) + 32;
    }

    echo "Temperatura em Farenheit = ".CtoF($c)."°C";
?>
</body>
</html>



