<!-- 5. Construir el algoritmo que lea por teclado dos números,
si el primero es mayor al segundo informar su suma y
diferencia, en caso contrario, informar el producto y la
división del primero respecto al segundo. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="ejercicio5.php" method="POST">
        <label>Numero1</label>
        <input type="number" name="n1">
        <label>Numero2</label>
        <input type="number" name="n2">
        <input type="submit" value="Spend">
    </form>
</body>
</html>
<?php
$numero1 = $_POST["n1"];
$numero2 = $_POST["n2"];
$suma = $numero1+$numero2;
$diferencia = $numero1-$numero2;
$producto = $numero1*$numero2;
$division = $numero1/$numero2;
if($numero1 > $numero2){
    echo "la suma es: {$suma} y la diferencia es: {$diferencia}"; 
}
else
    echo "el producto es: {$producto} y la division es: {$division}";

?>