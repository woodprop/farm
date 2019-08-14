<?php

class Farm {
    private $cows;
    private $chickens;


    public function __construct($cowQuantity = 10, $chickenQuantity = 20) {
        $this->cows = $this->generate('Cow', $cowQuantity);
        $this->chickens = $this->generate('Chicken', $chickenQuantity);
    }


    private function generate($type, $quantity) {
        static $id = 1;
        $animalsArray = [];
        foreach (range(1, $quantity) as $i) {
            $animal = new $type;
            $animal->setId($id++);
            array_push($animalsArray, $animal);
        }
        return $animalsArray;
    }


    public function getProducts() {
        $milk = 0;
        $eggs = 0;

        foreach ($this->cows as $cow) {
            $milk += $cow->getProduct();
        }

        foreach ($this->chickens as $chicken) {
            $eggs += $chicken->getProduct();
        }

        $products = ['milk' => $milk, 'eggs' => $eggs];
        return $products;
    }

}
