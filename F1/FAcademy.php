<?php
public class FAcademy extends Monoplaza{
    public int potenciaMaxima;

    public function __construct(string $nombre, string $nacionalidad, int $numero, string $escuderia, int $puntos, int $potenciaMaxima) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->potenciaMaxima = $potenciaMaxima;
    }
    public function posicionValida(int $num){
        if($pos < 18 || $pos > 1){
            return true;
        }
        return false;
    public function otorgarPuntos(int $pos, boolean $rapida){
        int $puntos =[18,15,12,10,8,6,4,2,1];
            if(posicionValida){
                for(int $i=0; $i < $puntos.length; i++){
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
    public function subirCategoria($patrocinador) {
        if (!$this->tieneSuperlicencia) {
            return new F4($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $this->puntos, $patrocinador);
        }
    }
}
?>