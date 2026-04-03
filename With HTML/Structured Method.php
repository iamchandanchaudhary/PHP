<?php
    file_put_contents("data.txt", "New content");
    echo file_get_contents("data.txt");
?>
