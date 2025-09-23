<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=David , initial-scale=1.0">
    <title>Ej 40</title>
</head>
<body>
<?php
function esPar(int $num) : bool {
    return $num == 0;
}

function arrayAleatorio(int $tam, int $min, int $max) : array {
    $array = [];
    for($i = 0; $i < $tam;$i++) {
        $array[] = rand($min,$max);
    }
    return $array;
}

function arrayPares(array &$array): int {
    $contador = 0;
    foreach ($array as $num) {
        if (esPar($num)) {
            $contador++;
        }
    }
    return $contador;
}



?>
</body>
</html>