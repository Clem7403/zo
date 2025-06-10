<?php

namespace App\Animals;

use App\Animal;

class Zebra extends Animal {

    public function getNoise(): string{
        return "hiiiiiiii";
    }
}