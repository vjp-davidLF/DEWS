<?php

    $conexion = mysqli_connect("localhost", "root", "", "lol");

    // COMPROBAMOS LA CONEXIÓN
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    // VERIFICAR SI VIENE UN ID PARA EDITAR
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && empty($_POST['guardar'])) {
        // MODO LECTURA: Mostrar formulario con datos actuales
        $id = $_POST['id'];
        
        $consulta = "SELECT * FROM `campeon` WHERE id = " . intval($id);
        $resultado = mysqli_query($conexion, $consulta);
        
        if ($resultado && mysqli_num_rows($resultado) > 0) {
            $campeon = mysqli_fetch_assoc($resultado);
        } else {
            echo "Campeón no encontrado.";
            exit();
        }
    } elseif ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['guardar'])) {
        // MODO GUARDADO: Actualizar datos en la base de datos
        $id = intval($_POST['id']);
        $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']);
        $rol = mysqli_real_escape_string($conexion, $_POST['rol']);
        $dificultad = mysqli_real_escape_string($conexion, $_POST['dificultad']);
        
        $consulta = "UPDATE `campeon` SET nombre = '$nombre', rol = '$rol', dificultad = '$dificultad' WHERE id = $id";
        
        if (mysqli_query($conexion, $consulta)) {
            header("Location: 604campeones.php");
            exit();
        } else {
            echo "Error al actualizar: " . mysqli_error($conexion);
        }
    } else {
        header("Location: 604campeones.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Campeón</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #0a1428 0%, #1a2847 100%);
            min-height: 100vh;
            padding: 20px;
            color: #c89b3c;
        }
        
        .container {
            max-width: 600px;
            margin: 50px auto;
            background: linear-gradient(135deg, #1a2847 0%, #0f1624 100%);
            border: 2px solid #c89b3c;
            border-radius: 8px;
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #e0c85f;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #c89b3c;
            font-weight: bold;
        }
        
        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #c89b3c;
            border-radius: 4px;
            background: rgba(0, 0, 0, 0.3);
            color: #e0c85f;
            font-size: 1em;
        }
        
        input[type="text"]:focus,
        select:focus {
            outline: none;
            border-color: #e0c85f;
            box-shadow: 0 0 10px rgba(200, 155, 60, 0.3);
        }
        
        .button-group {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 30px;
        }
        
        button {
            padding: 12px 30px;
            border: none;
            border-radius: 4px;
            font-size: 1em;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .btn-guardar {
            background-color: #4CAF50;
            color: white;
        }
        
        .btn-guardar:hover {
            background-color: #45a049;
            transform: translateY(-2px);
        }
        
        .btn-cancelar {
            background-color: #666;
            color: white;
        }
        
        .btn-cancelar:hover {
            background-color: #555;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>✏️ Editar Campeón</h1>
        
        <form method="POST" action="605editar.php">
            <input type="hidden" name="id" value="<?php echo $campeon['id']; ?>">
            
            <div class="form-group">
                <label for="nombre">Nombre del Campeón:</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($campeon['nombre']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="rol">Rol:</label>
                <input type="text" id="rol" name="rol" value="<?php echo htmlspecialchars($campeon['rol']); ?>" required>
            </div>
            
            <div class="form-group">
                <label for="dificultad">Dificultad:</label>
                <select id="dificultad" name="dificultad" required>
                    <option value="">-- Selecciona una dificultad --</option>
                    <option value="Bajo" <?php echo ($campeon['dificultad'] == 'Bajo') ? 'selected' : ''; ?>>Bajo</option>
                    <option value="Medio" <?php echo ($campeon['dificultad'] == 'Medio') ? 'selected' : ''; ?>>Medio</option>
                    <option value="Alto" <?php echo ($campeon['dificultad'] == 'Alto') ? 'selected' : ''; ?>>Alto</option>
                </select>
            </div>
            
            <div class="button-group">
                <button type="submit" name="guardar" value="1" class="btn-guardar">💾 Guardar Cambios</button>
                <a href="604campeones.php"><button type="button" class="btn-cancelar">❌ Cancelar</button></a>
            </div>
        </form>
    </div>
</body>
</html>
