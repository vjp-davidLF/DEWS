<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php 
    $nombre = "David";
    $apellido = "López";
    $mail = "d@vjp.es";
    $añoNac = "2006";
    $tel = "0000000000";
    ?>
    <table border="1">

      </thead>
      <tbody>
        <tr>
          <td>Nombre</td>
          <td><?php echo $nombre; ?></td>
        </tr>
        <tr>
          <td>Apellido</td>
          <td><?php echo $apellido; ?></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><?php echo $mail; ?></td>
        </tr>
        <tr>
          <td>Año de Nacimiento</td>
          <td><?php echo $añoNac; ?></td>
        </tr>
        <tr>
          <td>Teléfono</td>
          <td><?php echo $tel; ?></td>
        </tr>
      </tbody>
    </table>

</body>
</html>