<!-- Using && Operator -->
<?php
    $age = 20;
    $hasID = true;

    if ($age >= 18 && $hasID) {
        echo "You can enter.";
    }
?>

<!-- Using || Operator -->
<?php
    $marks = 40;

    if ($marks >= 90 || $marks >= 35) {
        echo "Pass";
    }
?>

<!-- Using ! Operator -->
<?php
    $loggedIn = false;

    if (!$loggedIn) {
        echo "Please log in first.";
    }
?>
