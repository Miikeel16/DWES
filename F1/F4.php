<?php
class F4 extends Monoplaza{
    public $pais;

    function __construct($nombre, $nacionalidad, $numero,  $escuderia, $puntos, $pais) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->pais = $pais;
    }
    function posicionValida($num){
        if($pos < 30 || $pos > 1){
            return true;
        }
        return false;
    function otorgarPuntos($pos, $rapida){
        $puntos =[25,18,15,12,10,8,6,4,2,1];
            if(posicionValida){
                for($i=0; $i < $puntos.length; $i++){
                    if($pos == $i){
                        $puntos += $puntos[$i];
                    }
                }
            }
        }
    }
    public function subirCategoria($patrocinador) {
        if (!$this->tieneSuperlicencia) {
            return new F3($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $this->puntos, $patrocinador);
        }
    }
}
?>