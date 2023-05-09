<?php

trait Discount {
    protected $discount;

    public function getDiscount(){
        return $this->discount;
    }

    public function setDiscount(int $discount){
        $this->discount = $discount;
    }

    public function getPrice(){
        return $this->price - $this->price * $this->discount / 100;
    }
}