<?php
require_once('Monoplaza.php');
require_once('F3.php');

class F4 extends Monoplaza {
    public $pais;

    public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $pais) {
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->pais = $pais;
    }

    public function posicionValida($num): bool {
        return $num >= 1 && $num <= 30;
    }

    public function otorgarPuntos($pos): void {
        $tablaPuntos = [25,18,15,12,10,8,6,4,2,1];
        if ($this->posicionValida($pos) && $pos <= count($tablaPuntos)) {
            $this->puntos += $tablaPuntos[$pos - 1];
        }
    }
}
?>
