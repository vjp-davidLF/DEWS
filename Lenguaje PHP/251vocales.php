<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=David , initial-scale=1.0">
    <title>Ej 51</title>
</head>
<body>
    <?php
   
        $frase1 = "Esto es una frase";
        $vocales = ['a', 'e' , 'i' , 'o', 'u'];
        $totalVocales = 0;

        for ($i = 0; $i < strlen($frase1); $i++) {
            $letra = strtolower($frase1[$i]);
            if (array_key_exists($letra, $vocales)) {
                $vocales[$letra]++;
                $totalVocales++;
            }
        }

        foreach ($vocales as $vocal => $cantidad) {
            echo "La vocal '$vocal' aparece $cantidad veces.<br>";
        }
        echo "Total de vocales: $totalVocales";

    ?>
</body>
</html>