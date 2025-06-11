<?php
require __DIR__ . '/vendor/autoload.php';

use App\Animals\Fish;
use App\Animals\CatFish;
use App\Animals\ClownFish;
use App\Animals\Elephant;
use App\Animals\BubbleFish;
use App\Animals\Dove;
use App\Animals\Parrot;
use App\Animals\Zebra;
use App\Enclosure;
use App\Zoo;


$animalQuantite= [
    Fish::class => 5,
    BubbleFish::class => 3,
    CatFish::class => 2,
    ClownFish::class  => 1,
    Elephant::class  => 2,
    Zebra::class  => 1,
    Parrot::class  => 10,
    Dove::class  => 2
];


foreach($animalQuantite as $animale => $quantite){
    for($i=0;$i<$quantite;$i++){
        $animals = new $animale($animale);
        Zoo::addAnimal($animals);
    //     echo "\n" . $animale . " " . $animals->getNoise() . " " . $quantite . "\n"; 
    }
}

Zoo::visitTheZoo();