<?php
require_once("service.php");

class SessionService extends Service {
    private $name;
    private $basePrice;
    private $caracteristics;
    private $numberOfSessions;
    
    public function __construct($name,$basePrice,$caracteristics,$numberOfSessions) {
        parent::__construct($name,$basePrice,$caracteristics);
        $this->numberOfSessions = $numberOfSessions;
    }

    public function increaseSessions() {
        $this->numberOfSessions ++;
    }

    public function decreaseSessions() {
        $this->numberOfSessions --;
    }


    //getter
    public function getnumberOfSessions() {
        return $this->numberOfSessions;
    }

    // public function __toString() {
    //     return "Servicio con Sesiones: {$this->name} , {$this->basePrice} , {$this->caracteristics} , {$this->numberOfSessions}";
    // }

}