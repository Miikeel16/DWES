<?php
require_once('Monoplaza.php');
require_once('F2.php');

class F3 extends Monoplaza {
    public $nombreAcademia;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $nombreAcademia) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->nombreAcademia = $nombreAcademia;
    }

    public function posicionValida($num): bool {
        return $num >= 1 && $num <= 30;
    }

    public function otorgarPuntos($pos, $vueltaRapida): void {
        $tablaPuntos = [10,9,8,7,6,5,4,3,2,1];
        if ($this->posicionValida($pos) && $pos <= count($tablaPuntos)) {
            $this->puntos += $tablaPuntos[$pos - 1];
        }
    }
    public function subirCategoria($tienePuntosSuperlicencia): F2 {
        return new F2(
            $this->nombre,
            $this->nacionalidad,
            $this->numero,
            $this->escuderia,
            $this->puntos,
            $tienePuntosSuperlicencia
        );
    }
}
?>
