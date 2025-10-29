<?php
// Verifica si se envió el formulario por POST y si hay un archivo sin errores
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
    // Verifica que el archivo sea una imagen
    if (strpos($_FILES['archivo']['type'], 'image/') === 0) {
        // Crea la carpeta uploads/ si no existe
        if (!is_dir('uploads')) mkdir('uploads');
        
        // Define la ruta donde se guardará el archivo
        $archivo = 'uploads/' . basename($_FILES['archivo']['name']);
        // Mueve el archivo a la carpeta uploads/
        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $archivo)) {
            // Obtiene el ancho y alto, o usa 200 por defecto
            $ancho = $_POST['anchura'] ?? 200;
            $alto = $_POST['altura'] ?? 200;
            // Muestra la imagen con las dimensiones especificadas
            echo "<img src='$archivo' width='$ancho' height='$alto'>";
        }
    }
}
?>
