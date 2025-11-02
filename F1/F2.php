<?php
require_once('Monoplaza.php');
require_once('F1.php');

class F2 extends Monoplaza {
    public $puntosSuperlicencia;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $puntosSuperlicencia) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->puntosSuperlicencia = $puntosSuperlicencia;
    }

    public function posicionValida($num): bool {
        return $num >= 1 && $num <= 24;
    }

    public function otorgarPuntos($pos, $vueltaRapida): void {
        $tablaPuntos = [10,8,7,6,5,4,3,2,1];
        if ($this->posicionValida($pos) && $pos <= count($tablaPuntos)) {
            $this->puntos += $tablaPuntos[$pos - 1];
        }
        if ($vueltaRapida) {
            $this->puntos += 1;
        }
    }
    public function subirCategoria($patrocinadorPrincipal): F1 {
        return new F1(
            $this->nombre,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $this->puntos,
            $patrocinadorPrincipal
        );
    }
}
?>
