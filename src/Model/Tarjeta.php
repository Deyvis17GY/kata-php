<?php

namespace Models;

class Tarjeta{
    private $columnas;

    public function __construct($columnas){
        $this->columnas = $columnas;
    }

    //respeta las columnas no se pasen los limites
    public function isValid(): bool{
       
        return $this->tamañoValido() && $this->limite();
    }

    private function tamañoValido():bool{
        foreach($this->columnas as $column){
            if(sizeof($column)!==5){
                return false;
            }
            return true;
        }
    }

    private function limite():bool{
        return 
        $this->elementoEntreColumnas($this->columnas['B'],1,15)
        && $this->elementoEntreColumnas($this->columnas['I'],16,30)
        &&  $this->elementoEntreColumnas( $this->columnas['N'],31,45,true)
        &&  $this->elementoEntreColumnas( $this->columnas['G'],46,60)
        &&  $this->elementoEntreColumnas( $this->columnas['O'],61,75);
    }
    
    private function elementoEntreColumnas($columna,$minimo,$maximo,$valorNull=false):bool{
        foreach($columna as $numero){
            if($valorNull && is_null(($numero))){
                continue;//Avanza
            }
            if($numero < $minimo || $numero > $maximo){
                
                return false;
            }
        }
        return true;
    }

    public function TarjetaLibreMedio(){
        return is_null($this->columnas['N'][2]);
    }

    public function NumeroObtenido(){
        return array_merge(
             $this->columnas['B'],
             $this->columnas['I'],
             $this->columnas['N'],
             $this->columnas['G'],
             $this->columnas['O'],           
        );
    }
        
    
}
