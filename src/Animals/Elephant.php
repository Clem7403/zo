<?php

namespace App\Animals;

use App\Animal;

class Elephant extends Animal{

    public function getNoise(): string{
        return "toooooooout";
    }
}