<?php

class Robot {
    public function __construct() {
        $this->reset();
    }    

    public function getName() {
        return $this->name;
    }

    public function reset() {
        $this->name = NameGenerator::generate();
    }
}

class NameGenerator{
    private static $usedNames;
    public static function generate(){
        while (true){
            $name = self::getLetter().self::getLetter();
            $name .= rand(0,9).rand(0,9).rand(0,9);
            if (!isset(self::$usedNames[$name])){
                self::$usedNames[$name] = true;
                return $name;
            }
        }
    }

    private static function getLetter(){
        $rand = rand(0,25);
        return "ABCDEFGHIJKLMNOPQRSTUVWXYZ"[$rand];
    }
}
