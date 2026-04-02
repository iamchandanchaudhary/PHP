<?php
    $username = $_POST['username'] ?? '';
    $username = trim($username);
    // Always sanitize & validate before using
    echo "Received: " . htmlspecialchars($username, ENT_QUOTES, 'UTF-8');
?>
