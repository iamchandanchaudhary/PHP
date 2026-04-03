<?php
    $file = fopen("data.txt", "w");
    fwrite($file, "Hello PHP File Handling\n");
    fwrite($file, "This is a second line.");
    fclose($file);
?>