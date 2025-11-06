<?php
abstract class Jugador{
    protected $nombreJugador;
    protected $nacionalidad;
    protected $nombreEquipo;
    protected $torneosGanados;
    protected $puntosRanking;
    protected $categoria;

    public function __construct($nombreJugador, $nacionalidad, $nombreEquipo, $torneosGanados, $puntosRanking, $categoria) {
        $this->nombreJugador = $nombreJugador;
        $this->nacionalidad = $nacionalidad;
        $this->nombreEquipo = $nombreEquipo;
        $this->torneosGanados = $torneosGanados;
        $this->puntosRanking = $puntosRanking;
        $this->categoria = $categoria;
    }



    abstract public function otorgarPuntos($pos, $vueltaRapida): void;
    abstract public function posicionValida($num): bool;

    public function getNombreJugador(){
        return $this->nombreJugador;
    }
    public function setNombreJugador($nombreJugador){
        return $this->nombreJugador=$nombreJugador;
    }

}
?>