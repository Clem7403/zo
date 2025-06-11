<?php 
namespace App\Animals;

use App\Animal;
class Fish extends Animal{

    public function getNoise(): string{
        return "bloubloublou";
    }
}