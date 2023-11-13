<?php
require_once ("element.php");

class Service extends Element {
    private $name;
    private $basePrice;
    private $caracteristics;

    public function __construct($name,$basePrice,$caracteristics) {
        parent::__construct($name,$basePrice,$caracteristics);
    }

    // public function __toString() {
    //     return "Servicio: {$this->name} , {$this->basePrice} , {$this->caracteristics} , {$this->getPrice()}";
    // }
}