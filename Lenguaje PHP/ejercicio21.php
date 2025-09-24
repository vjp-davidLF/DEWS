<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 21</title>
</head>
<body>


<?php

$inicio=$_GET["inicio"];

$fin=$_GET["fin"];

// Bucle ascendente
$suma = 0;
for ($i = $inicio; $i <= $fin; $i++) {
    $suma += $i;
}
echo "La suma es " . $suma;
?>
    
</body>
</html>
