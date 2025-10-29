<?php
// Procesa la subida solo si el formulario fue enviado (POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Verifica si el archivo fue recibido sin errores
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
        echo "Archivo recibido correctamente: " . htmlspecialchars($_FILES['archivo']['name']) . "<br>";
        echo "Tamaño: " . $_FILES['archivo']['size'] . " bytes<br>";
    } else {
        // Muestra error si no se recibió archivo o hubo problema
        echo "Error: No se recibió el archivo o hubo un problema.<br>";
    }
    
    // Valida que la anchura sea un número
    if (isset($_POST['anchura']) && is_numeric($_POST['anchura'])) {
        echo "Anchura recibida: " . htmlspecialchars($_POST['anchura']) . "<br>";
    } else {
        // Muestra error si anchura no es válida
        echo "Error: Anchura no válida o no recibida.<br>";
    }
    
    // Valida que la altura sea un número
    if (isset($_POST['altura']) && is_numeric($_POST['altura'])) {
        echo "Altura recibida: " . htmlspecialchars($_POST['altura']) . "<br>";
    } else {
        // Muestra error si altura no es válida
        echo "Error: Altura no válida o no recibida.<br>";
    }
}
?>