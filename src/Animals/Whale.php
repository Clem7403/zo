<?php
namespace App\Animals;

use App\Animal;

class Whale extends Animal{

    public function getNoise(): string{
        return "whouuuuuu";
    }
}