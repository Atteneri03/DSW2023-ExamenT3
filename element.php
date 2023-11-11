<?php
 class Element {
    private $name;
    private $basePrice;
    private $caracteristics;
    private $tax = 7;

    public function __construct($name,$basePrice,$caracteristics) {
        $this->name = $name;
        $this->basePrice = $basePrice;
        $this->caracteristics = $caracteristics;
    }

    //getters
    public function getName() {
        return $this->name;
    }
    public function getBasePrice() {
        return $this->basePrice;
    }
    public function getCaracteristics() {
        return $this->caracteristics;
    }
    public function getPrice() {
        return $this->basePrice + (($this->tax / 100)*  $this->basePrice);
    }

    //setters
    public function setName($name) {
        $this->name = $name;
    }
    public function setBasePrice($price) {
        $this->basePrice = $basePrice;
    }
    public function setCaracteristics($caracteristics) {
        $this->caracteristics = $caracteristics;
    }
    
    public function setTax($newTax) {
        $this->tax == $newTax;
    }
}