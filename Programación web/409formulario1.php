<?php
// Inicio la sesión
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Paso 1</title>
</head>
<body>
    <h1>Paso 1: Datos Personales</h1>
    <br>
    
    <!-- Formulario que envía los datos al paso 2 -->
    <form method="POST" action="409formulario2.php">
        
        <!-- Campo nombre -->
        <label>Nombre:</label>
        <input type="text" name="nombre" required>
        <br><br>
        
        <!-- Campo apellidos -->
        <label>Apellidos:</label>
        <input type="text" name="apellidos" required>
        <br><br>
        
        <!-- Campo email -->
        <label>Email:</label>
        <input type="email" name="email" required>
        <br><br>
        
        <!-- Campo URL -->
        <label>URL:</label>
        <input type="url" name="url" required>
        <br><br>
        
        <!-- Campo sexo -->
        <label>Sexo:</label>
        <select name="sexo" required>
            <option value="">-- Selecciona --</option>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
            <option value="Otro">Otro</option>
        </select>
        <br><br>
        
        <!-- Botón siguiente -->
        <button type="submit">Siguiente</button>
    </form>
</body>
</html>
