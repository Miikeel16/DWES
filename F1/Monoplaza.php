<?php
abstract class Monoplaza {
    public string $nombre;
    public string $nacionalidad;
    public int $numero;
    public string $escuderia;
    public int $puntos;

    public function __construct(string $nombre, string $nacionalidad, int $numero, string $escuderia, int $puntos) {
        $this->nombre = $nombre;
        $this->nacionalidad = $nacionalidad;
        $this->numero = $numero;
        $this->escuderia = $escuderia;
        $this->puntos = $puntos;
}
    abstract public static function otorgarPuntos():
    abstract public static function posicionValida():
    abstract public static function subir categoria():
}
?>