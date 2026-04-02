<?php
    class Student {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function display() {
            echo "Student name is " . $this->name;
        }
    }

    $s1 = new Student("Aman");
    $s1->display();
?>
