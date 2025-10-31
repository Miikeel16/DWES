<?php
class F1 extends Monoplaza{
    public $patrocinadorPrincipal;

    function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $patrocinadorPrincipal) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinadorPrincipal = $patrocinadorPrincipal;
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
        if($rapida){
            $puntos += 1;
        }
    }
}
?>