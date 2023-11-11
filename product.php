<?php
require_once("element.php");

class Product extends Element{
    private $manufactureName;
    private $weight;
    private $volume;

    public function __construct($name,$basePrice,$caracteristics,$manufactureName,$weight,$volume) {
        parent::__construct($name,$basePrice,$caracteristics);
        $this->manufactureName = $manufactureName;
        $this->weight = $weight;
        $this->volume = $volume;

    }

    public function shippingCost() {
        $fixedCost = 2;
        $weightCost = $this->weight * 0.0002;
        $volumeCost = floor($this->volume / 1000); // Incrementa en 1€ por cada 1000cm^3

        $shippingCost = $fixedCost + $weightCost + $volumeCost;

        return $shippingCost;
    }
}