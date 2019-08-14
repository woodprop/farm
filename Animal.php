<?php

abstract class Animal{
    protected $id;
    protected $minProd;
    protected $maxProd;
    protected $productType;


    public function getProduct() {
        $productAmount = rand($this->minProd, $this->maxProd);
        return $productAmount;
    }


    public function setId($id) {
        $this->id = $id;
    }
}