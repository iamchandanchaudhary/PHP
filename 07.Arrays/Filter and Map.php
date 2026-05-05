<?php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    // Get even numbers
    $evens = array_filter($numbers, fn($n) => $n % 2 === 0);
    // Result: [2, 4, 6, 8, 10]

    // Square each number
    $squares = array_map(fn($n) => $n ** 2, $numbers);
    // Result: [1, 4, 9, 16, 25, 36, 49, 64, 81, 100]

    // Sum all values
    $sum = array_reduce($numbers, fn($carry, $n) => $carry + $n, 0);
    // Result: 55
?>
