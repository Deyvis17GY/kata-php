<?php 
use PHPUnit\Framework\TestCase;

class BingoTest extends TestCase{

    public function testNumeroLlamadoRango(){
        $bingo = new Bingo();
        $numero = $bingo->NumerosBingo();

        $this->assertTrue($numero >= 1 && $numero <=75);
    }

    public function testNumerollamado75Veces(){
        $bingo= new Bingo();
        $bingoNumeros = [];
        $rangoNumero = range(1,75);
        for($i=1; $i<=75; $i++){
            $bingoNumeros[] = $bingo->NumerosBingo();
        }

        sort($bingoNumeros);//Ordenar los numeros de 1 al 75
        $this->assertEquals($rangoNumero,$bingoNumeros);//Probamos con PHPunit si el valor es el esperado
    }

    
}

?>