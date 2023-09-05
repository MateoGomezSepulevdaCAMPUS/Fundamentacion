<!-- 4. Construir el algoritmo que solicite el nombre y edad de 3
personas y determine el nombre de la persona con mayor edad. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <form action="ejercicio4.php" method="POST">
    <label>Persona 1</label>
    <input type="text" name="persona1">
    <label>Edad</label>
    <input type="number" name="edad1">
    <br>
    <label>Persona 2</label>
    <input type="text" name="persona2">
    <label>Edad</label>
    <input type="number" name="edad2">
    <br>
    <label>Persona 3</label>
    <input type="text" name="persona3">
    <label>Edad</label>
    <input type="number" name="edad3">
    <br>
    <input type="submit" value="Send">
    </form>
</body>
</html>
<?php
$persona1 = $_POST["persona1"];
$persona2 = $_POST["persona2"];
$persona3 = $_POST["persona3"];
$edad1 = $_POST["edad1"];
$edad2 = $_POST["edad2"];
$edad3 = $_POST["edad3"];

$personamayor = "";
$edadmayor = 0;

if($edad1 > $edadmayor){    
    $personamayor = $persona1;
    $edadmayor = $edad1;
}
if($edad2 > $edadmayor){
    $personamayor = $persona2;
    $edadmayor = $edad2;
}
if ($edad3 > $edadmayor) {
    $personamayor = $persona3;
    $edadmayor = $edad3;
}

echo " La persona mayor es {$personamayor} con la edad de {$edadmayor}";
?>