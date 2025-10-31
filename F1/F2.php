<?php
class F2 extends Monoplaza{
    public $puntosSuperlicencia;

    function __construct($nombre, $nacionalidad, $numero,  $escuderia, $puntos, $puntosSuperlicencia) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->puntosSuperlicencia = $puntosSuperlicencia;
    }
    function posicionValida($num){
        if($pos < 24 || $pos > 1){
            return true;
        }
        return false;
    function otorgarPuntos($pos, $rapida){
        $puntos =[10,8,7,6,5,4,3,2,1];
            if(posicionValida){
                for($i=0; $i < $puntos.length; $i++){
                    if($pos == $i){
                        $puntos += $puntos[$i];
                    }
                }
            }
        }
        if($rapida){
            $puntos += 1;
        }
    }
    function subirCategoria($patrocinador) {
        if (!$this->tieneSuperlicencia) {
            return new F1($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $this->puntos, $patrocinador);
        }
    }
}
?>