<?php

require_once ("service.php");

class EventService extends Service {
    private $name;
    private $basePrice;
    private $caracteristics;
    private $executeDate;

    public function __construct($name,$basePrice,$caracteristics,$executeDate) {
        parent::__construct($name,$basePrice,$caracteristics);
        $this->executeDate = $executeDate;
    }

    public function isExecuted() {
        $today = new DateTime();

        return ($today > $this->executeDate) ? "El evento ya ha sido" : "El evento aún no ha sido";
    }

    public function daysToExecute() {
        $today = new DateTime();
        $diff = $hoy->diff($this->executeDate);

        //Se aplica el incremento al precio según los días que falten para el evento
        if ($diff <= 7 && $diff > 0) {
            // Aplicar un incremento del 20% una semana antes del evento.
            $increment = $this->getPrice() * 0.20;
        } elseif ($diff = 0) {
            // Aplicar un incremento del 50% el día del evento.
            $increment = $this->getPrice() * 0.50;
        } else {
            $increment = 0;
        }

        parent::__construct($this->getPrice() + number_format($incrementn, 2));

        return $diff->days;
    }

    //getters
    public function getexecuteDate() {
        return $this->executeDate;
    }

    // public function __toString() {
    //     return "Evento: {$this->name} , {$this->basePrice} , {$this->caracteristics} , {$this->executeDate}";
    // }

}