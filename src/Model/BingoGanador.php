<?php

use Models\Tarjeta;

class BingoGanador{

    public static function Ganador(Bingo $bingo,Tarjeta $tarjeta){
        $numerosTarjeta = $tarjeta->NumeroObtenido();//Numero obtenido en el bingo

        foreach($numerosTarjeta as $numeroTarjeta){
            if(!$bingo->NumeroLlamado($numeroTarjeta)){
                return false;
            }
        }
        return true;
    }
}