<?php
require_once("element.php");

class Product extends Element{
  public $name;
  public $basePrice;
  public $caracteristics;
  public $manufactureName;
  public $weight;
  public $volume;

  function __construct($name,$basePrice,$caracteristics,$manufactureName,$weight,$volume){
    parent::__construct($name,$basePrice,$caracteristics);
    $this->manufactureName = $manufactureName;
    $this->weight = $weight;
    $this->volume = $volume;

  }

}