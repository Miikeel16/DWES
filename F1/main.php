<?php

require_once('F1.php');

function main() {
    $carro = new F1("Fernando Alonso", "España", 14, "Aston Martin", 0, "Aramco");

    $posicion = 3;
    $vueltaRapida = true;

    $puntosGanados = F1::otorgarPuntos($posicion, $vueltaRapida);

    echo "Piloto: ".$carro->nombre;
    echo "Posición: ".$posicion;
    echo "Vuelta rápida: " . $vueltaRapida;
    echo "Puntos ganados: " . $puntosGanados;
}

main();
?>
