<?php

namespace App\Animals;

use App\Animal;
use App\Interfaces\CanFly;
abstract class Duck extends Animal implements CanFly{

    abstract public function getNoise(): string;
}