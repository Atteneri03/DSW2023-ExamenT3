<?php
require_once("element.php");
require_once("product.php");
require_once("perishableProduct.php");
require_once("service.php");
require_once("eventService.php");
require_once("sessionService.php");
require_once("mixedService.php");
require_once("unlimitedService.php");
require_once("store.php");


$store = new Store();

// 2 productos no perecederos
$producto1 = new Product("Macarrones","2.00","Paquete de macarrones","Gallo","200","50");
$producto2 = new Product("Lentejas","1.50","Paquete de lentejas","Luengo","500","80");

//1 producto perecedero que haya caducado
$perishable1 = new PerishableProduct("Leche","1.80","Un litro de leche","Central lechera Asturiana","500","900","2023-08-13");

//1 producto perecedero que caduque en 2 o 3 días
$perishable2 = new PerishableProduct("Yogur","0.80","Un yogur","Danone","150","200","2023-11-15");

//1 producto perecedero que caduque en 20 o 25 días.
$perishable3 = new PerishableProduct("Galletas","4.00","Un paquete de galletas","Oreo","500","300","2023-12-04");

//3 eventos: uno caducado, otro que caduque hoy y otro que caduque en unos meses.
$service1 = new EventService("Concierto","20.00","Concierto de X cantante","2021-02-12");
$service2 = new EventService("Viaje","300.00","Viaje a X lugar","2023-11-12");
$service3 = new EventService("Spa","62.40","Sesión en spa","2024-01-12");

//2 servicios por sesiones: uno al que le quedan pocas sesiones y otro al que no le queda ninguna.
$service4 = new SessionService("Zumba","20.00","Clase de Zumba, servicio por sesiones","4");
$service5 = new SessionService("Yoga","12.00","Clase de Yoga, servicio por sesiones","0");

//2 servicios mixtos: uno caducado y otro no.
$service6 = new MixedService("Zumba","21.30","Clase de Zumba, servicio por sesiones","2023-08-13","5");
$service7 = new MixedService("Yoga","15.80","Clase de Yoga, servicio por sesiones","2024-02-13","10");

//2 servicios normales.
$service8 = new UnlimitedService("Libro electronico","9.99","Compra de un libro electronico");
$service9 = new UnlimitedService("Pelicula","5.99","Compra de una pelicula");



$store->addElement($producto1);
$store->addElement($producto2);
$store->addElement($perishable1);
$store->addElement($perishable2);
$store->addElement($perishable3);
$store->addElement($service1);
$store->addElement($service2);
$store->addElement($service3);
$store->addElement($service4);
$store->addElement($service5);
$store->addElement($service6);
$store->addElement($service7);
$store->addElement($service8);
$store->addElement($service9);


echo "Muestro los elementos:<br>";

$store->showElements();

echo "<br>------------------------<br><br>";

echo "Muestro los productos:<br>";
$store->showProducts();

echo "<br>------------------------<br><br>";

echo "Muestro los productos perecederos:<br>";
$store->showPerishableProducts();


echo "<br>------------------------<br><br>";

echo "Muestro los servicios:<br>";
$store->showServices();
