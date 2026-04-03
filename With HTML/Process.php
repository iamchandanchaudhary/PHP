<?php
    $username = $_POST['username'];
    $email = $_POST['email'];

    echo "Welcome, " . htmlspecialchars($username) . "<br>";
    echo "Your email is: " . htmlspecialchars($email);
?>