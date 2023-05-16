<!-- 2. Dado un número indicar si es par o impar y si es mayor de 10. -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    <form action="ejercicio2.php" method="POST">
        <label>Ingrese el digito</label>
        <input type="number" name="numero" >
        <input type="submit" value="Send">
    </form>
    
</body>
</html>
<?php
$NUM = "{$_POST["numero"]}";
echo "El numero $NUM ";
if($NUM % 2){
    echo " es IMPAR";
}
else{
    echo " es PAR";
}
if($NUM > 10){
    echo " Y es mayor de 10";
}
else{
    echo " Y es menor de 10";
}
?>