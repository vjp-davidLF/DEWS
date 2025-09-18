<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 22.1</title>
</head>

<body>
    <?php


    // Bucle ascendente
    $base = 2;
    $exponente = 3;
    $potencia = 1;
    $i = 1;

    while ($i <= $exponente) {

        $potencia *= $base;
        $i++;
    }
    echo $potencia;
    ?>

</body>

</html>