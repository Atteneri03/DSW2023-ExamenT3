<?php
require_once("service.php");

class Event extends Service {
  public $executionDate;
  public $basePrice;

  function __construct($name,$basePrice,$caracteristics, $executionDate){
    parent::__construct($name,$basePrice,$caracteristics);
    $this->executionDate = $executionDate;
    
  }

  function isExecuted(){
    $hoy = new DateTime("now");
    $hoy = $hoy->format("Y-m-d");
    // $this->expireDate = $this->expireDate->format("Y-m-d");
    if($this->executionDate < $hoy){
      echo "El evento ya se ha celebrado";
    } else {
      echo "El evento aun no se ha celebrado";
    }
  }

  function expireDays(){
    $hoy = new DateTime("now");
    $hoy = $hoy->format("Y-m-d");
    $interval = $this->executionDate->diff($hoy);
    if($interval < 7 && $interval > 0){
      $porcentaje = ((float)20 * 100) / $basePrice; 
      $porcentaje = round($porcentaje, 0);
      $this->basePrice += $porcentaje;
    } else if($interval = 0){
      $porcentaje = ((float)50 * 100) / $basePrice; 
      $porcentaje = round($porcentaje, 0);
      $this->basePrice += $porcentaje;

    }

    echo "El evento termina en " . $interval;
  }
}