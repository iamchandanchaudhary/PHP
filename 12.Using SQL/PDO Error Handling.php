// PDO with error handling
<?php
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=college", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected via PDO!";
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>
