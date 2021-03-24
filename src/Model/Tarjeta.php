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

    //Funcion que valida el tamaño de las columnas
    private function tamañoValido():bool{
        foreach($this->columnas as $column){
            if(sizeof($column)!==5){
                return false;
            }
            return true;
        }
    }

    //Funcion que pone limite a las columnas
    private function limite():bool{
        return 
        $this->elementoEntreColumnas($this->columnas['B'],1,15)
        && $this->elementoEntreColumnas($this->columnas['I'],16,30)
        &&  $this->elementoEntreColumnas( $this->columnas['N'],31,45,true)
        &&  $this->elementoEntreColumnas( $this->columnas['G'],46,60)
        &&  $this->elementoEntreColumnas( $this->columnas['O'],61,75);
    }
    
    //Funcion que muestra los elementos entre las columnas con sus valores
    private function elementoEntreColumnas($columna,$minimo,$maximo,$valorNull=false):bool{
        foreach($columna as $numero){
            //Condicion que muestra que el numero es nulo
            if($valorNull && is_null(($numero))){
                continue;//Avanza
            }
            if($numero < $minimo || $numero > $maximo){
                
                return false;
            }
        }
        return true;
    }

    //Funcion que pone un espacio en el medio de las colunas bingo
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
