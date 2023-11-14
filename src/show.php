<?php
include 'index.php';

function showFilteredElements($store, $filter) {
    $filteredElements = array_filter((array) $store, function ($element) use ($filter) {
        switch ($filter) {
            case 'all':
                return true;
            case 'products':
                return $element instanceof Product;
            case 'services':
                return $element instanceof Service;
            case 'perishable':
                return property_exists($element, 'expirationDate');
            case 'sellable':
                if (property_exists($element, 'expirationDate')) {
                    return false;
                }
                return true;
            default:
                return false;
        }
    });

    
    foreach ($filteredElements as $element) {
        echo "Name: {$element->name}<br>";
        echo "Features: {$element->features}<br>";
        echo "Price: {$element->price} €<br><br>";
    }
}

// Filtro de la URL ( http://localhost/DSW2023-ExamenT3/src/show.php?filter=products)
$filter = isset($_GET['filter']) ? $_GET['filter'] : 'all';

// Call the function to show the filtered elements
showFilteredElements($store, $filter);
?>