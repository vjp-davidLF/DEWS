<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 22</title>
</head>
<body>
    
<?php


// Bucle ascendente
$base = 2;
$exponente = 3;
$potencia = 1;

for ($i = 1; $i <= $exponente; $i++) {
    $potencia *= $base;
}
echo "El resultado es " . $potencia;
?>
</body>
</html>