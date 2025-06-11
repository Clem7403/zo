<?php 

namespace App;

class Enclosure {
    
    private array $animals = [];

    public function addAnimal($animal) : void {
        $this->animals[] = $animal;
    }

    public function toString(): void {
        foreach($this->animals as $animal){
            echo $animal->getName() . " " . $animal->getNoise() . "\n";
        }
    }

}