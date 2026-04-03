<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = trim($_POST['username']);

        if (empty($username)) {
            echo "Name is required.";
        } else {
            echo "Hello " . htmlspecialchars($username);
        }
    }
?>
