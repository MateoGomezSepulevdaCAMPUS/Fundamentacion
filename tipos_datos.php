<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de datos</title>
</head>
<body>
    <?php
    /* 1. String serie de caracteres */
    $customer = "Falcao";
    echo "The customer {$customer} bought <br>";

    $favorite_food = "Panzaerotti y pizza";
    echo "a {$favorite_food}<br>";

    /* 2. integer es un numero */
    $price = 5000;
    echo "The cost is {$price}";

    /*3. Floating point number - floats -doubles - real numbers */
    $goal_rate_por_game = 4.5;
    echo "<br>and now he is calebratung his goal rate per futbo game of {$goal_rate_por_game}";

    /* 4. boolean tiene 2 valores true o false */
    $state = true;
    echo "<br> is falcao a champion? that is{$state}";
    /*5. Obtener tipos de datos */
    $type_data = gettype($goal_rate_por_game);
    echo "<br> tipo de dato es {$type_data}";

    ?>
</body>
</html>