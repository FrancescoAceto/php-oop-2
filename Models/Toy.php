<?php

require_once __DIR__ . "/Animal.php";

class Toy {
    protected $name;
    protected $type;
    protected $price;
    protected $animal;

    function __construct(string $name, string $type, float $price, Animal $animal){
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->animal = $animal;
    }

    public function getName(){
        return $this->name;
    }

    public function getType(){
        return $this->type;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getAnimal(){
        return $this->animal;
    }
}