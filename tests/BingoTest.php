<?php 
use PHPUnit\Framework\TestCase;
use src\Bingo;
use src\BingoCaller;

require __DIR__ . "/../src/Controlador/Bingo.php";

class BingoTest extends TestCase{

    public function testNumeroLlamadoRango(){
        $caller = new Bingo();
        $number = $caller->NumerosBingo();

        $this->assertTrue($number >= 1 && $number <=75);
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