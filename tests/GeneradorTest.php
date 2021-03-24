<?php 
use PHPUnit\Framework\TestCase;



class GeneradorTest extends TestCase{

    public function testTarjetasNumerosValidosAndLimite(){
        $generador = new Generador();
        $tarjeta = $generador->generar();
        $this->assertTrue($tarjeta->isValid());
    }

    public function testTarjetaEspacioCentro(){
        $generador = new Generador();
        $tarjeta = $generador->generar();
        $this->assertTrue($tarjeta->TarjetaLibreMedio());
    }
}