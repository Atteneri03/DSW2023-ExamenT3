<?php
require_once("service.php");

class MixedService extends Service {
    private $executeDate;
    private $numberOfSessions;

    public function __construct($name,$basePrice,$caracteristics,$executeDate,$numberOfSessions) {
        parent::__construct($name,$basePrice,$caracteristics);
        $this->executeDate = $executeDate;
        $this->numberOfSessions = $numberOfSessions;
    }

    public function isExecuted() {
        $today = new DateTime();

        return ($today > $this->executeDate) ? "El evento ya ha sido" : "El evento aún no ha sido";
    }

    public function daysToExecute() {
        $today = new DateTime();
        $diff = $hoy->diff($this->executeDate);

        return $diff->days;
    }

    public function increaseSessions() {
        $this->numberOfSessions ++;
    }

    public function decreaseSessions() {
        $this->numberOfSessions --;
    }

    // public function __toString() {
    //     return "Servicio Mixto: {$this->name} , {$this->basePrice} , {$this->caracteristics} , {$this->executeDate} , {$this->numberOfSessions}";
    // }
}