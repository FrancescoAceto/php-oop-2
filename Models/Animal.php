<?php

class Animal{
    protected $name;

    function __construct(string $name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

