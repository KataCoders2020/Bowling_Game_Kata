<?php

namespace App;

final class Game
{   
    private $roll = 1;
    private $frame = 2; 

    public function getPins()
    {
        $maximumPins = 10;

        return $maximumPins;
    }

    public function getFrame()
    {
        return $this->frame;
    }

}