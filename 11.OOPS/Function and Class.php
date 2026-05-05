    
    <?php
    function greet(string $name): string {
        return "Hi, $name!";
    }

    class User {
        public function __construct(private string $name) {}
        public function sayHello() {
            return "Hello, $this->name";
        }
    }

    echo greet("Aisha");
    $user = new User("Aisha");
    echo $user->sayHello();
    ?>
