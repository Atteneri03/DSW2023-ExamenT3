<?php
require_once("product.php");

class PerishableProduct extends Product {
    private $expireDate;

    public function __construct($name,$basePrice,$caracteristics,$manufactureName,$weight,$volume,$expireDate) {
        parent::__construct($name,$basePrice,$caracteristics,$manufactureName,$weight,$volume);
        $this->expireDate = DateTime::createFromFormat('Y-m-d', $expireDate);
    }

    public function isExpired() {
        $today = new DateTime();

        return ($today > $this->expireDate) ? "El producto está caducado" : "El producto no está caducado";
    }

    public function daysToExpire() {
        $today = new DateTime();
        $diff = $today->diff($this->expireDate);
        return $diff->days;
    }

    public function applyDiscount() {
        $daysToExpire = $this->daysToExpire();

        if ($daysToExpire <= 30) {
            // Aplicar un descuento del 10% un mes antes de caducar.
            $discount = $this->getPrice() * 0.10;
        } elseif ($daysToExpire <= 10) {
            // Aplicar un descuento del 25% diez días antes de la fecha límite.
            $discount = $this->getPrice() * 0.25;
        } else {
            $discount = 0;
        }

        parent::setBasePrice($this->getPrice() - number_format($discount, 2));
    }

    // public function __toString() {
    //     $parentString = parent::__toString();

    //     return "Producto Perecedero: $parentString ,  {$this->expireDate}";
    // }
}