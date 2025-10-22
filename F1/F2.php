<?php
public class F2 extends Monoplaza{
    public int puntosSuperlicencia;

    public function __construct(string $nombre, string $nacionalidad, int $numero, string $escuderia, int $puntos, int $puntosSuperlicencia) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->puntosSuperlicencia = $puntosSuperlicencia;
    }
    public function posicionValida(int $num){
        if($pos < 24 || $pos > 1){
            return true;
        }
        return false;
    public function otorgarPuntos(int $pos, boolean $rapida){
        int $puntos =[10,8,7,6,5,4,3,2,1];
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
            return new F1($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $this->puntos, $patrocinador);
        }
    }
}
?>