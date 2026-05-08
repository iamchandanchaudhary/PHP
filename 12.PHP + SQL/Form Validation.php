<?php
    // Remove extra spaces and special characters
    $name = htmlspecialchars(strip_tags(trim($_POST['name'])));

    // Validate email in PHP
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email!";
    }
?>
