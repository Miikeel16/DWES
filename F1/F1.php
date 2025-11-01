<?php
require_once('Monoplaza.php');

class F1 extends Monoplaza {
    public $patrocinadorPrincipal;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $patrocinadorPrincipal) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinadorPrincipal = $patrocinadorPrincipal;
    }

    public function posicionValida($num, $vueltaRapida): bool {
        return $num >= 1 && $num <= 30;
    }

    public function otorgarPuntos($pos): void {
        $tablaPuntos = [25,18,15,12,10,8,6,4,2,1];
        if ($this->posicionValida($pos) && $pos <= count($tablaPuntos)) {
            $this->puntos += $tablaPuntos[$pos - 1];
        }
        if ($vueltaRapida) {
            $this->puntos += 1;
        }
    }
}
?>
