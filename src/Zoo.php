<?php 

namespace App;

use App\Interfaces\CanFly;
use App\Interfaces\CanWalk;
use App\Interfaces\CanSwim; 

class Zoo {
    private static ?Enclosure $aquarium = null;
    private static ?Enclosure $aviary = null;
    private static ?Enclosure $fence = null;

    public static function getAquarium(): Enclosure {
        if (self::$aquarium === null){
            self::$aquarium = new Enclosure();
        }
        return self::$aquarium;
    }

    public static function getAviary(): Enclosure{
        if(self::$aviary ===null){
            self::$aviary = new Enclosure();
        }
        return self::$aviary;
    }

    public static function getFence(): Enclosure{
        if(self::$fence === null){
            self::$fence = new Enclosure();
        }
        return self::$fence;
    }

    public static function addAnimal($animal): void {
        if($animal instanceof CanSwim){
            self::getAquarium()->addAnimal($animal);
        } elseif($animal instanceof CanFly){
            self::getAviary()->addAnimal($animal);
        } elseif($animal instanceof CanWalk){
            self::getFence()->addAnimal($animal);
        }
    }

    public static function visitTheZoo(): void {
        echo "Aquarium :\n";
        echo self::getAquarium()->toString() . "\n";
        echo "Volière :\n";
        echo self::getAviary()->toString() . "\n";
        echo "Clôture :\n";
        echo self::getFence()->toString() . "\n";
    }
}