<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=David , initial-scale=1.0">
    <title>Ej 41</title>
</head>
<body>
    <?php
   
    function mayor(): int {
        $numeros = func_get_args();
        $mayor = $numeros[0];
        foreach ($numeros as $num) {
            if ($num > $mayor) {
                $mayor = $num;
            }
        }
        return $mayor;
    }

    function concatenar(...$palabras): string {
        return implode(" ", $palabras);
    }

    ?>
</body>
</html>