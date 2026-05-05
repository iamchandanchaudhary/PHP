<?php
    // Indexed
    $nums = [1, 2, 3];

    // Associative
    $user = [
    'name' => 'Chandan',
    'email' => 'c@example.com'
    ];

    // Multidimensional
    $matrix = [
    [1,2,3],
    [4,5,6]
    ];

    // Empty then push
    $stack = [];
    array_push($stack, 'a', 'b'); // $stack = ['a','b']

    // Array unpacking (PHP 7.4+)
    $a = [1, 2];
    $b = [...$a, 3, 4]; // [1,2,3,4]

    echo $nums[0];                // 1
    echo $user['name'];           // Chandan

            
    echo $matrix[0][1];  // Output: 2
    echo $matrix[1][2]; // Output: 6


    // Check key exists
    if (array_key_exists('email', $user)) { ... }
    // or if you only want non-null check, use isset($user['email'])

    // foreach (recommended)
    foreach ($user as $key => $value) {
        echo "$key => $value\n";
    }

    // for loop (indexed arrays)
    $colors = ["Red", "Green", "Blue"];
    for ($i = 0; $i < count($colors); $i++) {
        echo $colors[$i] . "\n";
    }

    // when you need index
    for ($i = 0, $n = count($nums); $i < $n; $i++) {
        echo $nums[$i];
    }


?>
