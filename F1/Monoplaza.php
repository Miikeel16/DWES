<?php
abstract class Monoplaza {
    protected $nombre;
    protected $nacionalidad;
    protected $numero;
    protected $escuderia;
    protected $puntos;

    function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos) {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
}
    abstract public static function otorgarPuntos():void
    abstract public static function posicionValida():bool
}
?>