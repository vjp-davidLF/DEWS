<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 </title>
</head>
<body>
<?php
$inicio = $_GET["inicio"];
$fin = $_GET["fin"];
for ($inicio; $inicio <= $fin; $inicio++) {
    if($inicio%2==0)
    echo "Número " . $inicio;
    echo "<br>";
}

?>
</body>
</html>