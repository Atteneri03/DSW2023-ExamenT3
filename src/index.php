<?php
  require_once("product.php");
  require_once("service.php");
  require_once("perishableProduct.php");
  require_once("event.php");



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h2>Ejercicio tienda online</h2>
  <?php
    $product1 = new Product("producto1",5,"prueba","nombre fabricante",20,29);
    echo "Primer producto: <br>";
    var_dump($product1);
    echo "<br>Primer servicio: <br>";
    $service1 = new Service("servicio1",5,"prueba","nombre fabricante",20,29);
    var_dump($service1);

    echo "<br>";
    $pProduct1 = new PerishableProduct("producto1",5,"prueba","nombre fabricante",20,29,new DateTime("2020/08/08"));
    $pProduct1->isExpired();

    echo "<br>";
    $event1 = new Event("Evento1",10,"prueba de evento", "2024/02/12");
    $event1->isExecuted();
    $event1->expireDays();

  ?>
</body>
</html>