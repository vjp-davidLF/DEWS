<?php
// Inicio la sesión
session_start();

// Guardo los datos del paso 1 en la sesión
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['nombre'] = $_POST['nombre'];
    $_SESSION['apellidos'] = $_POST['apellidos'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['url'] = $_POST['url'];
    $_SESSION['sexo'] = $_POST['sexo'];
}
?>

<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario - Paso 2</title>
</head>
<body>
    <h1>Paso 2: Información Adicional</h1>
    <br>
    
    <!-- Formulario que envía los datos al paso 3 -->
    <form method="POST" action="409formulario3.php">
        
        <!-- Campo convivientes -->
        <label>¿Cuántos convivientes tienes?</label>
        <input type="number" name="convivientes" min="0" required>
        <br><br>
        
        <!-- Campo aficiones (checkboxes) -->
        <label>Aficiones:</label>
        <label><input type="checkbox" name="aficiones[]" value="Lectura"> Lectura</label>
        <label><input type="checkbox" name="aficiones[]" value="Deportes"> Deportes</label>
        <label><input type="checkbox" name="aficiones[]" value="Música"> Música</label>
        <label><input type="checkbox" name="aficiones[]" value="Viajes"> Viajes</label>
        <br><br>
        
        <!-- Campo menú -->
        <label>Menú preferido:</label>
        <select name="menu" required>
            <option value="">-- Selecciona --</option>
            <option value="Mediterráneo">Mediterráneo</option>
            <option value="Asiático">Asiático</option>
            <option value="Italiano">Italiano</option>
            <option value="Mexicano">Mexicano</option>
        </select>
        <br><br>
        
        <!-- Botón enviar -->
        <button type="submit">Ver Resumen</button>
    </form>
</body>
</html>
