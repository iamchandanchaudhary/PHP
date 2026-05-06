<?php
    $sql    = "SELECT * FROM students";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Name: " . $row["name"] . " | Marks: " . $row["marks"] . "<br>";
        }
    } else {
        echo "No records found.";
        
    }
?>