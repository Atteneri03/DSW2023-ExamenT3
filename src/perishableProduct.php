<?php
require_once("product.php");

class PerishableProduct extends Product {
  public $expireDate;
  public $basePrice;

  function __construct($name,$basePrice,$caracteristics,$manufactureName,$weight,$volume,$expireDate){
    parent::__construct($name,$basePrice,$caracteristics,$manufactureName,$weight,$volume);
    $this->expireDate = $expireDate;

  }

  function isExpired(){
    $hoy = new DateTime("now");
    $hoy = $hoy->format("Y-m-d");
    // $this->expireDate = $this->expireDate->format("Y-m-d");
    if($this->expireDate < $hoy){
      echo "El producto está caducado";
    } else {
      echo "El producto no está caducado";
    }
  }

  function expireDays(){
    $hoy = new DateTime("now");
    $hoy = $hoy->format("Y-m-d");
    $interval = date_diff($hoy, $this->expireDate);
    if($interval > 10){
      $porcentaje = ((float)10 * 100) / $basePrice; 
      $porcentaje = round($porcentaje, 0);
      $this->basePrice = $this->basePrice - $porcentaje;
    } else if($interval < 10){
      $porcentaje = ((float)25 * 100) / $basePrice; 
      $porcentaje = round($porcentaje, 0);
      $this->basePrice = $this->basePrice - $porcentaje;

    }
  }
}