<?php
public class F3 extends Monoplaza{
    public String nombreAcademia;

    public function __construct(string $nombre, string $nacionalidad, int $numero, string $escuderia, int $puntos, int $nombreAcademia) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->nombreAcademia = $nombreAcademia;
    }

    public function otorgarPuntos(int $pos, boolean $rapida){
        if($pos > 30 || $pos < 1){
            echo "Posicion no valida";
        }else{
            switch ($pos):
                case 1:
                    $puntos = $puntos + 18;
                case 2:
                    $puntos = $puntos + 15;
                case 3:
                    $puntos = $puntos + 12;
                case 4:
                    $puntos = $puntos + 10;
                case 5:
                    $puntos = $puntos + 8;
                case 6:
                    $puntos = $puntos + 6;
                case 7:
                    $puntos = $puntos + 4;
                case 8:
                    $puntos = $puntos + 2;
                case 9:
                    $puntos = $puntos + 1;
                case >10:
                    $puntos = $puntos + 0;
        }            
    }
}
?>