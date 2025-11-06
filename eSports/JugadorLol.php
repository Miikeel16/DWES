<?php
    class JugadorLol extends Jugador{
        private $JugadorLol=['Top', 'Mid', 'Jungla', 'ADC', 'Support'];

        public function __construct($nombreJugador, $nacionalidad, $nombreEquipo, $torneosGanados, $puntosRanking, $categoria, $JugadorLol){
            parent::constructor($nombreJugador, $nacionalidad, $nombreEquipo, $torneosGanados, $puntosRanking);
                $this->JugadorLol=$JugadorLol;
        }
    }
?>