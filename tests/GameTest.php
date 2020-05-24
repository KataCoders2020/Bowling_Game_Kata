<?php

use PHPUnit\Framework\TestCase;
use App\Game;


class GameTest extends TestCase
{
    public function test_basic_test()
    {
        $this->assertTrue(true);
    }

    public function test_if_any_pin_is_knock_down()
    {
        $game = New Game;
        for ($i = 0; $i < 20; $i++)
        {
            $game->roll(0);
        }

        $this->assertSame(0, $game->score());

    }

    public function test_if_the_ball_do_not_knock_down_any_pin()
    {
        $game = New Game;
        for ($i = 0; $i < 20; $i++)
        {
            $game->roll(0);
        }

        $this->assertSame(0, $game->score());

    }


    public function test_if_the_ball_knock_down_all_ones()
    {
        $game = New Game;
        for ($i = 0; $i < 20; $i++)
        {
            $game->roll(1);
        }

        $this->assertSame(20, $game->score());

    }

} 

