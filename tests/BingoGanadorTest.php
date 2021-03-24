<?php

use PHPUnit\Framework\TestCase;

class BingoGanadorTest extends TestCase{

    public function testBingoGanadorFalse(){
        $bingo = new Bingo();
        $tarjeta = (new Generador())->generar();

        for($i=1;$i<=20;$i++){
            $bingo->NumerosBingo();
        }
        $this->assertFalse(
            BingoGanador::Ganador($bingo,$tarjeta)
        );
    }


    public function testBingoGanadorOk(){
        $bingo = new Bingo();
        $tarjeta = (new Generador())->generar();

        for($i=1;$i<=75;$i++){
            $bingo->NumerosBingo();
        }

        $this->assertTrue(
            BingoGanador::Ganador($bingo,$tarjeta)
        );
        
    
    }

}