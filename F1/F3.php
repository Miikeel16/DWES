<?php
class F3 extends Monoplaza{
    public $nombreAcademia;

    function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos,  $nombreAcademia) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->nombreAcademia = $nombreAcademia;
    }
    function posicionValida($num){
        if($pos < 30 || $pos > 1){
            return true;
        }
        return false;
    function otorgarPuntos($pos, $rapida){
        int $puntos =[10,9,8,7,6,5,4,3,2,1];
            if(posicionValida){
                for(int $i=0; $i < $puntos.length; $i++){
                    if($pos == $i){
                        $puntos += $puntos[$i];
                    }
                }
            }
        }
    }
    function subirCategoria($patrocinador) {
        if (!$this->tieneSuperlicencia) {
            return new F2($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $this->puntos, $patrocinador);
        }
    }
}
?>