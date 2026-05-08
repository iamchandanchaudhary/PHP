<?php
    $name  = $_POST['name'];
    $marks = $_POST['marks'];

    $sql = "INSERT INTO students (name, marks) VALUES ('$name', '$marks')";

    if (mysqli_query($conn, $sql)) {
        echo "Record inserted!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
?>
