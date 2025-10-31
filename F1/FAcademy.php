<?php
require_once('Monoplaza.php');
require_once('F4.php');

class FAcademy extends Monoplaza {
    public $potenciaMaxima;
    public $vueltaRapida = false;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $potenciaMaxima) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->potenciaMaxima = $potenciaMaxima;
    }

    public function posicionValida($num): bool {
        return $num >= 1 && $num <= 18;
    }

    public function otorgarPuntos($pos): void {
        $tablaPuntos = [18,15,12,10,8,6,4,2,1];
        if ($this->posicionValida($pos) && $pos <= count($tablaPuntos)) {
            $this->puntos += $tablaPuntos[$pos - 1];
        }
        if ($this->vueltaRapida) {
            $this->puntos += 1;
        }
    }
}
?>
