<?php
public class FAcademy extends Monoplaza{
    public int $potenciaMaxima;

    function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $potenciaMaxima) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->potenciaMaxima = $potenciaMaxima;
    }
    function posicionValida($num){
        if($pos < 18 || $pos > 1){
            return true;
        }
        return false;
    function otorgarPuntos($pos, $rapida){
        $puntos =[18,15,12,10,8,6,4,2,1];
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
            return new F4($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $this->puntos, $patrocinador);
        }
    }
}
?>