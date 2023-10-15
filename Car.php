<?php

class Car {
    public $name;
    public $color;
public function sayHello() {
    echo "Hello from the Car class!";
}
}

$car1 = new Car();
$car1->name ='ferari';
$car1->color ='black';

$car1->sayHello(); 
echo 'the '. $car1->name . ' has color ' . $car1->color;