<?php
abstract class Monoplaza {
    public $nombre;
    public $nacionalidad;
    public $numero;
    public $escuderia;
    public $puntos;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos) {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
    }

    abstract public function otorgarPuntos($pos, $vueltaRapida): void;
    abstract public function posicionValida($num): bool;
}
?>
