<?php namespace src;

class Bingo
{
    private $numeros=[];

    public function __construct()
    {
       
    }

    public function NumerosBingo(){

        do {
            $numero = rand(1,75);
        } while (in_array($numero, $this->numeros));

        $this->numeros[]= $numero;
        return $numero;
       
    }

}
