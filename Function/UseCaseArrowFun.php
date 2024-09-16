<?php
    //i.Array Functions: Arrow functions are especially useful with array functions like `array_map`, `array_filter`, etc.
    $numbers = [1, 2, 3, 4, 5];
    $squares = array_map(fn($n) => $n * $n, $numbers);
    print_r($squares); // Outputs: [1, 4, 9, 16, 25]

    //ii.Short Callbacks: They simplify the syntax for short callback functions.
    $strings = ['apple', 'banana', 'cherry'];
    usort($strings, fn($a, $b) => strlen($a) <=> strlen($b));
    print_r($strings); // Outputs: ['apple', 'cherry', 'banana']

    //iii.Inline Calculations: Useful for inline calculations and transformations.
    $increment = fn($x) => $x + 1;
    echo $increment(4); // Outputs: 5x

?>