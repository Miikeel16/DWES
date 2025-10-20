<?php
public class FAcademy extends Monoplaza{
    public int potenciaMaxima;

    public function __construct(string $nombre, string $nacionalidad, int $numero, string $escuderia, int $puntos, int $potenciaMaxima) {    
        parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);
        $this->potenciaMaxima = $potenciaMaxima;
    }
    public function otorgarPuntos(int $pos, boolean $rapida){
        if($pos > 18 || $pos < 1){
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
        if($pos >= 10){
            $puntos = $puntos + 1;
        }
    }
}
?>