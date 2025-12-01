<?php

    $conexion = mysqli_connect("localhost", "root", "", "lol");

    // COMPROBAMOS LA CONEXIÓN
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // VERIFICAR SI VIENE UN ID PARA BORRAR
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
        $id = intval($_POST['id']);
        
        // Primero verificamos que el campeón existe
        $consulta_verificar = "SELECT * FROM `campeon` WHERE id = $id";
        $resultado = mysqli_query($conexion, $consulta_verificar);
        
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $campeon = mysqli_fetch_assoc($resultado);
            
            // Ejecutar la eliminación
            $consulta_borrar = "DELETE FROM `campeon` WHERE id = $id";
            
            if (mysqli_query($conexion, $consulta_borrar)) {
                // Redirigir con mensaje de éxito
                header("Location: 604campeones.php?mensaje=borrado");
                exit();
            } else {
                echo "Error al borrar: " . mysqli_error($conexion);
            }
        } else {
            echo "Campeón no encontrado.";
            exit();
        }
    } else {
        header("Location: 604campeones.php");
        exit();
    }

    mysqli_close($conexion);

?>
