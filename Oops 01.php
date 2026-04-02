<?php
    class Car {
        public $brand;
        public $color;

        public function drive() {
            echo "The car is driving.";
        }
    }

    $myCar = new Car();
    $myCar->brand = "Toyota";
    $myCar->color = "Red";
    $myCar->drive();
?>