<?php
    class Animal {
        public function eat() {
            echo "Eating";
        }
    }

    class Dog extends Animal {
        public function bark() {
            echo "Barking";
        }
    }

    $dog = new Dog();
    $dog->eat();
    $dog->bark();
?>
