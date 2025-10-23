<?php
public class F3 extends Monoplaza{
    public String $nombreAcademia;

    public function __construct(string $nombre, string $nacionalidad, int $numero, string $escuderia, int $puntos, int $nombreAcademia) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->nombreAcademia = $nombreAcademia;
    }
    public function posicionValida(int $num){
        if($pos < 30 || $pos > 1){
            return true;
        }
        return false;
    public function otorgarPuntos(int $pos, boolean $rapida){
        int $puntos =[10,9,8,7,6,5,4,3,2,1];
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
            return new F2($this->nombrePiloto, $this->nacionalidad, $this->numero, $this->escuderia, $this->puntos, $patrocinador);
        }
    }
}
?>