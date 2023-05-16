<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facturas</title>
</head>
<body>
    <form action="facturas.php" method = "post">
    <select name="Monedas" id="">
        <option value="BitCoin">BitCoin</option>
        <option value="Ethereum">Ethereum</option>
        <option value="Tether">Tether</option>
        <option value="BNB">BNB</option>
    </select>
    <label>Cantidad</label>
    <input type="number" name="Cantidad">
    <label>Valor Precio</label>
    <input type="text" name="Valor">
    <input type="submit" value="Send">
    </form>   
</body>
</html>

<?php
$Monedas = "{$_POST['Monedas']}";
$cantidad = "{$_POST['Cantidad']}";
$Valor = "{$_POST['Valor']}";
$total = $cantidad * $Valor;

echo "El nombre de la moneda es: $Monedas, la cantidad es: $cantidad, el valor es: $Valor. el total es: $total";
?>