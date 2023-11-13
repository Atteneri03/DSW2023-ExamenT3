<?php
require_once("product.php");
require_once("service.php");
require_once("perishableProduct.php");

class Store {
    private $elements = array();

    public function addElement($newElement) {
        array_push($this->elements, $newElement);
        // $this->elements[] = $newElement;
    }

    public function showElements() {
        foreach ($this->elements as $element) {
            print_r($element);
            echo "Precio de venta: " . $element->getPrice() . "<br>";
        }
    }

    public function showProducts() {
        foreach ($this->elements as $element) {
            if($element instanceof Product){
                print_r($element);
                echo "Precio de venta: " . $element->getPrice() . "<br>";
            }
        }
    }

    public function showServices() {
        foreach ($this->elements as $element) {
            if($element instanceof Service){
                print_r($element);
                echo "Precio de venta: " . $element->getPrice() . "<br>";
            }
        }
    }

    public function showPerishableProducts() {
        foreach ($this->elements as $element) {
            if($element instanceof PerishableProduct){
                print_r($element);
                echo "Precio de venta: " . $element->getPrice() . "<br>";
            }
        }
    }

    public function showSalableProducts() {
        foreach ($this->elements as $element) {
            if($element instanceof PerishableProduct){
                if($element->isExpired()){
                    print_r($element);
                    echo "Precio de venta: " . $element->getPrice() . "<br>";
                }
            }
        }
    }

}