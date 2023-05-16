<!-- 1. Construir el algoritmo para un programa que ingrese tres
notas de un alumno, si el promedio es menor o igual a 3.9
mostrar un mensaje "Estudie“, de lo contrario un mensaje que
diga "becado" -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio1</title>
</head>
<body>
    <form action="ejercicio1.php" method="POST">
        <label>Nota #1</label>
        <input type="number" name="nota1">
        <br>
        <label>Nota #2</label>
        <input type="number" name="nota2">
        <br>
        <label>Nota #3</label>
        <input type="number" name="nota3">
        <input type="submit" value="Send">
    </form>
</body>
</html>
<?php
$Nota1 = "{$_POST["nota1"]}";
$Nota2 = "{$_POST["nota2"]}";
$Nota3 = "{$_POST["nota3"]}";
$total = ($Nota1+$Nota2+$Nota3)/3;
echo "La suma total es {$total}";

if($total<=3.9){
    echo " Estudie";
}
else{
    echo " becado";
}

?>