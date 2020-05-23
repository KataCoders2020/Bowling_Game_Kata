<?php

use App\Game;
use PHPUnit\Framework\TestCase;

///  10 turnos 
///  1 turno 2 = tiradas
///  En 1 tirada tenemos  10 bolos disponibles para puntuar
///  1 bolo = 1 pto


/// SPARE -  tirar 10 bolos en 2 tiradas
/// Recompensa: los puntos del siguiente turno que hagas se suman a la tirada del spare

/// STRIKE -  tirar 10 bolos en 1 tiradas
/// Recompensa: los puntos de los 2 siguientes turnos que hagas se suman a la tirada del strike


class GameTest extends TestCase
{
    public function test_cuantos_bolos_puedo_tirar_como_maximo_en_1_tirada()
    {
        $pins = 10;

        $roll= new Game();
        $result=$roll->getPins();        

        $this->assertEquals($pins, $result);
    }

    public function test_if_a_frame_have_maximum_two_roll()
    {
        $frame= new Game();
        $result= $frame->getFrame();
        $this->assertSame(2, $result);
    }

} 
