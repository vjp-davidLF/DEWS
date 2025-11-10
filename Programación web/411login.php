<?php
session_start();

$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

if ($usuario == "usuario" && $contrasena == "usuario") {
    // Crear array de películas
    $peliculas = array(
        "El Padrino",
        "Titanic",
        "Avatar"
    );
    
    // Crear array de series
    $series = array(
        "Game of Thrones",
        "Breaking Bad",
        "Stranger Things"
    );
    
    // Guardar en sesión
    $_SESSION['usuario'] = $usuario;
    $_SESSION['peliculas'] = $peliculas;
    $_SESSION['series'] = $series;
    
    // Redirigir a películas
    header("Location: 412peliculas.php");
} else {
    header("Location: 410index.php");
}
?>
