<?php
    $name = "<script>alert('xss')</script>";
    echo htmlspecialchars($name);
?>
