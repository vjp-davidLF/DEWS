<?php
// Procesa la subida de archivo solo si el formulario fue enviado (POST)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifica que el archivo fue recibido sin errores
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] == 0) {
        // Obtiene el tipo MIME del archivo
        $tipo = $_FILES['archivo']['type'];
        // Verifica si es una imagen (comienza con 'image/')
        if (strpos($tipo, 'image/') === 0) {
            // Valida que anchura y altura sean números positivos
            if (isset($_POST['anchura']) && is_numeric($_POST['anchura']) && isset($_POST['altura']) && is_numeric($_POST['altura'])) {
                // Convierte los valores a enteros
                $anchura = (int)$_POST['anchura'];
                $altura = (int)$_POST['altura'];
                // Crea la carpeta uploads/ si no existe
                if (!is_dir('uploads')) {
                    mkdir('uploads', 0755, true);
                }
                // Define la ruta donde se guardará el archivo
                $filePath = 'uploads/' . basename($_FILES['archivo']['name']);
                // Mueve el archivo del temporal a la ruta destino
                if (move_uploaded_file($_FILES['archivo']['tmp_name'], $filePath)) {
                    // Muestra la imagen con los tamaños especificados
                    echo "<h2>Imagen subida:</h2>";
                    echo "<img src='" . htmlspecialchars($filePath) . "' width='" . $anchura . "' height='" . $altura . "' alt='Imagen'><br>";
                } else {
                    // Muestra error si no se puede guardar
                    echo "Error al guardar.<br>";
                }
            } else {
                // Muestra error si anchura o altura no son válidas
                echo "Anchura o altura inválidas.<br>";
            }
        } else {
            // Muestra error si el archivo no es una imagen e incluye el formulario para reintentar
            echo "Error: Solo imágenes. Tipo: " . htmlspecialchars($tipo) . "<br>";
            include '405subida.html';
        }
    } else {
        // Muestra error si no se recibió el archivo o hubo problema en la subida
        echo "Error en archivo.<br>";
    }
}
?>
