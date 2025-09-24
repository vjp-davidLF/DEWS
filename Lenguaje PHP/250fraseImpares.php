<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=David , initial-scale=1.0">
    <title>Ej 50</title>
</head>
<body>
    <?php
        $frase1 = "Esto es una frase";
        $frase3 = "";
        for ($i = 0; $i < strlen($frase1); $i++) {
            if ($i % 2 == 1) {
                $frase3 .= $frase1[$i];
            }
        }
        echo $frase3;

    ?>
</body>
</html>