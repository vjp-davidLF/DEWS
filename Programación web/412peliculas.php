<?php
session_start();

// Comprobar si está logueado
if (!isset($_SESSION['usuario'])) {
    header("Location: 410index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado de Películas</title>
</head>
<body>
    <h1>Listado de Películas</h1>
    
    <p><a href="412peliculas.php">Películas</a> | <a href="414series.php">Series</a> | <a href="413logout.php">Salir</a></p>
    
    <ul>
        <?php
        foreach ($_SESSION['peliculas'] as $pelicula) {
            echo "<li>" . $pelicula . "</li>";
        }
        ?>
    </ul>
</body>
</html>
