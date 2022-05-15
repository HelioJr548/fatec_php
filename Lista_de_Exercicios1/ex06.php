<!-- 6. Faça um programa que receba dois números e mostre qual
deles é o maior. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercio06</title>
</head>
<body>
    <Form method="get">
        <label for="n1">Primeiro valor: </label>
        <input type="number" name="n1" id="n1" > 

        <label for="n2">Segundo valor: </label>
        <input type="number" name="n2" id="n2">

        <input type="submit" value=" Verificar">
    </Form> <br>
    
<?php
    $n1 = $_GET['n1'];
    $n2 = $_GET['n2']; 

    if ($n1 > $n2){
        echo "Primeiro valor é maior que o segundo valor";
    } elseif ($n2 > $n1){
        echo "Segundo valor é maior que o primeiro valor";
    }else{
        echo "Nenhum valor recebido";
    }
?>


</body>
</html>