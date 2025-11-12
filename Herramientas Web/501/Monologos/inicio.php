<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/HolaMonolog.php';

// Crear una instancia de la clase Monologos
$monolog = new Monologos();

// Llamar al método saludar
$monolog->saludar();

// Llamar al método despedir
$monolog->despedir();

echo "Logs registrados correctamente. Revisa el archivo logs/app.log";
?>
