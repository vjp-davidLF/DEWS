<?php

require '../../../Herramientas Web/501/vendor/autoload.php';

$httpClient = new \Goutte\Client();
try {
    $response = $httpClient->request('GET', 'http://www.seleccionbaloncesto.es');
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit;
}

// Recopilar alturas
$alturas = [];
$response->filter('table tr td:nth-child(2)')->each(function ($node) use (&$alturas) {
    $alturaStr = $node->text();
    $altura = (float) str_replace(',', '.', $alturaStr);
    if ($altura > 0) {
        $alturas[] = $altura;
    }
});

// Recopilar edades
$edades = [];
$response->filter('table tr td:nth-child(3)')->each(function ($node) use (&$edades) {
    $edadStr = $node->text();
    $edad = (int) $edadStr;
    if ($edad > 0) {
        $edades[] = $edad;
    }
});

// Crear array de jugadores
$jugadores = [];
$num = min(count($alturas), count($edades));
for ($i = 0; $i < $num; $i++) {
    $jugadores[] = [
        'altura' => $alturas[$i],
        'edad' => $edades[$i]
    ];
}

$sumaAlturas = 0;
$sumaEdades = 0;
$numJugadores = count($jugadores);

foreach ($jugadores as $jugador) {
    $sumaAlturas += $jugador['altura'];
    $sumaEdades += $jugador['edad'];
}

$alturaMedia = $sumaAlturas / $numJugadores;
$edadMedia = $sumaEdades / $numJugadores;

echo "Altura media del equipo: " . number_format($alturaMedia, 2) . " m\n";
echo "Edad media del equipo: " . number_format($edadMedia, 2) . " años\n";

?>