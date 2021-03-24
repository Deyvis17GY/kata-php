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

        sort($bingoNumeros);
        $this->assertEquals($rangoNumero,$bingoNumeros);
    }

    
}

?>