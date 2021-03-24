<?php

use Models\Tarjeta;

class Generador{
    private $columna = [
        "B"=> [],
        "I"=> [],
        "N"=> [],
        "G"=> [],
        "O"=> []
    ];

    public function generar():Tarjeta{
        $this->columna['B']=$this->limites(1,15);
        $this->columna['I']=$this->limites(16,30);
        $this->columna['N']=$this->limites(31,45);
        $this->columna['G']=$this->limites(46,60);
        $this->columna['O']=$this->limites(61,75);

        $this->columna['N']['2']=null;//Espacio vacio dentro de la tarjeta

        return new Tarjeta($this->columna);
    }

    public function limites($minimo,$maximo){
        $columna = [];
        
        while (sizeof($columna)<5) {
            $numero = rand($minimo,$maximo);
            if(!in_array($numero,$columna)){
                $columna[]=$numero;
            }
        }
        return $columna;
    }
}