<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <?php
    /* Operadores Aritmeticos */
    /* + - * / ** */
    $x = 20;
    $y = 3;
    $z = null;

    $z = $x + $y;
    $z = $x - $y;
    $z = $x * $y;
    $z = $x / $y;
    $z = $x ** $y;
    echo $z;

    /* 2- Incremento/Drecremento operators */
    $counter = 0;
    $counter = $counter+1;
    /* $counter++;
    $counter--; */

    $counter -= 4;

    echo "<br>{$counter}";

    /* 3. jerarquia - Precedencia */
    ?>
</body>
</html>