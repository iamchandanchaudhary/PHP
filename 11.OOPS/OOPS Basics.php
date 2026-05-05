    
    <?php
        class MyClass {
            private $prop = "value";  // Private property
            public function __construct() { /* Constructor */ }
            
            public function getProp() {
                return $this->prop;
            }
        }

        $obj = new MyClass();
        echo $obj->getProp();  // Outputs: value

    ?>
