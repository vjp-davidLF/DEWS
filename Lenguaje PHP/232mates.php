<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=David, initial-scale=1.0">
    <title>Ej 32</title>
</head>
<body>
<?php

    $numeros2 = array();
    for($i = 0; $i < 33 ; $i++){
        $numeros2[] = rand(0,100);
    }

    foreach($numeros2 as $indice2){
        print $indice2;
        echo "<br>";
        
    }
    $mayor = max($numeros2);
    $menor = min($numeros2);
    $media = array_sum($numeros2) / count($numeros2);
    
    echo "Mayor: $mayor";
     echo "<br>";
    echo "Menor: $menor";
     echo "<br>";
    echo "Media: $media";
     

?>
</body>
</html>