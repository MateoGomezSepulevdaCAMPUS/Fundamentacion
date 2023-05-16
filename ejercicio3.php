<!-- 3. Construir el algoritmo para determinar el voltaje de un
circuito a partir de la resistencia y la intensidad de corriente. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 3</title>
</head>
<body>
    <form action="ejercicio3.php" method="POST">
    <label>Intensidad</label>
    <input type="number" name="intensidad">
    <label>Resistencia</label>
    <input type="number" name="resistencia">
    <input type="submit" value="Send">
    </form>
</body>
</html>
<?php
$Intensidad = "{$_POST["intensidad"]}";
$Resistencia = "{$_POST["resistencia"]}";
$voltaje = $Intensidad * $Resistencia;

echo "El voltaje es : {$voltaje} voltios";
?>