<?php

use PHPUnit\Framework\TestCase;
use App\Game;


class GameTest extends TestCase
{
    public function test_basic_test()
    {
        $this->assertTrue(true);
    }

    public function test_game()
    {
        $game = New Game;
        for ($i = 0; $i < 20; $i++)
        {
            $game->roll(0);
        }

        $this->assertSame(0, $game->score());

    }

} 

