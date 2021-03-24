<?php 

class Bingo
{
    private $numeros=[];//Array que sera encargado de almacenar los numeros

    //Funcion encargada de Mostrar los numeros en un rango de 1 al 75
    public function NumerosBingo(){

        do {
            $numero = rand(1,75);
        } while (in_array($numero, $this->numeros));

        $this->numeros[]= $numero;
        return $numero;
       
    }

    //Funcion que muestra si existe el numero en el arreglo
    public function NumeroLlamado($numero):bool{
        return in_array($numero, $this->numeros);
    } 

    

}
