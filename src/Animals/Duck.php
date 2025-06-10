<?php

namespace App\Animals;

use App\Animal;

abstract class Duck extends Animal{

    abstract public function getNoise(): string;
}