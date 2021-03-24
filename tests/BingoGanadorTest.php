<?php

use PHPUnit\Framework\TestCase;

class BingoGanadorTest extends TestCase{

    public function testBingoGanadorFalse(){//Si no resulta Ganador, por que no se levantaroon todos sus numeros
        $bingo = new Bingo();
        $tarjeta = (new Generador())->generar();

        for($i=1;$i<=45;$i++){//Efectuamos que aun no se levantaron los 75 numeros
            $bingo->NumerosBingo();
        }
        $this->assertFalse(
            BingoGanador::Ganador($bingo,$tarjeta)
        );
    }

 
    //Funcion que muestra que se levantaron todos los numeros
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