<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanWalk;

class Elephant extends Animal implements CanWalk{

    public function getNoise(): string{
        return "toooooooout";
    }
}