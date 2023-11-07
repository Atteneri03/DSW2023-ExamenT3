<?php
class Element{
  public $name;
  public $basePrice;
  public $caracteristics;
  public $tax = 7;
  
  function __construct($name,$basePrice,$caracteristics){
    $this->name = $name;
    $this->basePrice = $basePrice;
    $this->caracteristics = $caracteristics;

  }

  public function modifyTax($newTax){
    $this->tax = $newTax;
  }

}