<?php

require_once __DIR__ . "/Animal.php";
require_once __DIR__ . "/../Traits/Discount.php";



class Product {
    use Discount;

    protected $name;
    protected $type;
    protected $price;
    protected $animal;
    protected $discount;

    function __construct(string $name, string $type, float $price, Animal $animal, int $discount){
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->animal = $animal;
        $this->discount = $discount;
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