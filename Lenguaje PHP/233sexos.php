<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=David , initial-scale=1.0">
    <title>Ej 33</title>
</head>
<body>
    <?php
    $sexos = array();
    for ($i = 0; $i < 100; $i++) {
        if(rand(0,1)){
            $sexos[] = "M";
        }else {
            $sexos[] = "F";
        };
    
    }

    ?>  
</body>
</html>