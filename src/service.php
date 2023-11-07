<?php
require_once("element.php");

class Service extends Element{
  public $name;
  public $basePrice;
  public $caracteristics;
  public $tax = 7;
  
  function __construct($name,$basePrice,$caracteristics){
    parent::__construct($name,$basePrice,$caracteristics);
    
  }
}