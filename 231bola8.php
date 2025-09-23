<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ej 31</title>
</head>
<body>
    <?php
    $pregunta = $_GET["Pregunta"];
    echo "Pregunta: " .$pregunta;
    echo "<br>";

    $respuestas = array("Sí", "No", "¡Quizás!", "Claro que sí", "Por supuesto que no", "No lo tengo claro ", "Seguro, yo diría que sí", "Ni de coña");

    $aleatorio = $respuestas[array_rand($respuestas)];
    echo "<br>";
    echo "Respuesta: " . $aleatorio;
    
    ?>
</body>
</html>