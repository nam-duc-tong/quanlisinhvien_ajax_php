<?php
    require_once 'car.php';
    $honda= new car('Vin','Trang');
    $honda->running();
    echo "<br>";
    echo $honda->color;
?>