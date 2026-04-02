<?php
    if (isset($_COOKIE["user"])) {
        echo "Welcome back, " . htmlspecialchars($_COOKIE["user"]);
    } else {
        echo "Cookie not found.";
    }
?>
