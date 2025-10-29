<?php
// Inicio la sesión
session_start();

// Guardo los datos del paso 2 en la sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !isset($_POST['limpiar'])) {
    $_SESSION['convivientes'] = $_POST['convivientes'];
    $_SESSION['aficiones'] = isset($_POST['aficiones']) ? $_POST['aficiones'] : [];
    $_SESSION['menu'] = $_POST['menu'];
}

// Si presionan limpiar sesión, la borro ANTES de mostrar HTML
if (isset($_POST['limpiar'])) {
    session_destroy();
    header('Location: 409formulario1.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Resumen</title>
</head>
<body>
    <h1>Resumen del Formulario</h1>
    <br>
    
    <!-- Muestro el nombre -->
    <strong>Nombre:</strong> <?php echo isset($_SESSION['nombre']) ? htmlspecialchars($_SESSION['nombre']) : ''; ?>
    <br><br>
    
    <!-- Muestro los apellidos -->
    <strong>Apellidos:</strong> <?php echo isset($_SESSION['apellidos']) ? htmlspecialchars($_SESSION['apellidos']) : ''; ?>
    <br><br>
    
    <!-- Muestro el email -->
    <strong>Email:</strong> <?php echo isset($_SESSION['email']) ? htmlspecialchars($_SESSION['email']) : ''; ?>
    <br><br>
    
    <!-- Muestro la URL -->
    <strong>URL:</strong> <?php echo isset($_SESSION['url']) ? htmlspecialchars($_SESSION['url']) : ''; ?>
    <br><br>
    
    <!-- Muestro el sexo -->
    <strong>Sexo:</strong> <?php echo isset($_SESSION['sexo']) ? htmlspecialchars($_SESSION['sexo']) : ''; ?>
    <br><br>
    
    <!-- Muestro los convivientes -->
    <strong>Convivientes:</strong> <?php echo isset($_SESSION['convivientes']) ? htmlspecialchars($_SESSION['convivientes']) : ''; ?>
    <br><br>
    
    <!-- Muestro las aficiones -->
    <strong>Aficiones:</strong>
    <br>
    <?php 
        if (isset($_SESSION['aficiones']) && count($_SESSION['aficiones']) > 0) {
            echo "<ul>";
            foreach ($_SESSION['aficiones'] as $aficion) {
                echo "<li>" . htmlspecialchars($aficion) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "Ninguna";
        }
    ?>
    <br>
    
    <!-- Muestro el menú -->
    <strong>Menú Preferido:</strong> <?php echo isset($_SESSION['menu']) ? htmlspecialchars($_SESSION['menu']) : ''; ?>
    <br>
    
    <!-- Botones para continuar o limpiar -->
    <br>
    <a href="409formulario1.php"><button>Comenzar de nuevo</button></a>
    <form method="POST" style="display:inline;">
     </form>
</body>
</html>
