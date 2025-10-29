<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['reiniciar'])) {
        setcookie('visitas', '');
        header('Location: ' . $_SERVER['PHP_SELF']);
        exit();
    }

    if (isset($_COOKIE['visitas'])) {
        $contador = $_COOKIE['visitas'] + 1;
    } else {
        $contador = 1;
    }

    setcookie('visitas', $contador);
    ?>

    Primera visita: <?php echo ($contador == 1 ? "Sí" : "No"); ?><br>
    Contador: <?php echo $contador; ?><br>

    <!--y un boton que te reinicie la pagina a 0 visitas-->
    <form action="" method="get">
        <button type="submit" name="reiniciar">Reiniciar contador</button>
    </form>

</body>

</html>