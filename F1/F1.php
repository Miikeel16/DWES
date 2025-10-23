<?php
public class F1 extends Monoplaza{
    public String $patrocinadorPrincipal;

    public function __construct(string $nombre, string $nacionalidad, int $numero, string $escuderia, int $puntos, int $patrocinadorPrincipal) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->patrocinadorPrincipal = $patrocinadorPrincipal;
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
        if($rapida){
            $puntos += 1;
        }
    }
}
?>