<?php

// Datos de los jugadores del equipo masculino (convocados)
$jugadores = [
    ['altura' => 1.99, 'edad' => 26],
    ['altura' => 1.98, 'edad' => 19],
    ['altura' => 2.02, 'edad' => 24],
    ['altura' => 1.92, 'edad' => 19],
    ['altura' => 2.00, 'edad' => 28],
    ['altura' => 2.11, 'edad' => 24],
    ['altura' => 1.88, 'edad' => 30],
    ['altura' => 2.10, 'edad' => 31],
    ['altura' => 2.00, 'edad' => 28],
    ['altura' => 2.06, 'edad' => 29],
    ['altura' => 2.02, 'edad' => 25],
    ['altura' => 2.11, 'edad' => 28],
];

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
