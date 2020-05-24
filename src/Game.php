<?php

namespace App;

final class Game
{   
    private $score = 0;

    public function roll($int)
    {
        $this->score += $int;
    }

    public function score()
    {
        
        return $this->score;
    }
}