<?php
public class F4 extends Monoplaza{
    public String pais;

    public function __construct(string $nombre, string $nacionalidad, int $numero, string $escuderia, int $puntos, String $pais) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->pais = $pais;
    }
    public function posicionValida(int $num){
        if($pos < 30 || $pos > 1){
            return true;
        }
        return false;
    public function otorgarPuntos(int $pos, boolean $rapida){
        int $puntos =[25,18,15,12,10,8,6,4,2,1];
            if(posicionValida){
                for(int $i=0; $i < $puntos.length; i++){
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