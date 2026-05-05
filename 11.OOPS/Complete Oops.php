<?php
    class Student {
        public $name;
        public $age;

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function displayInfo() {
            echo "Name: " . $this->name . "<br>";
            echo "Age: " . $this->age . "<br>";
        }
    }

    $student1 = new Student("Rahul", 20);
    $student1->displayInfo();
?>
