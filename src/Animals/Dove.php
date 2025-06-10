<?php

namespace App\Animals;

use App\Animal;

class Dove extends Animal{

    public function getNoise(): string{
        return "Rou Rouuu";
    }
}