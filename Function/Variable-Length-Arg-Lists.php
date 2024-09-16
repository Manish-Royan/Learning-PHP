<?php
// Variable-Length Argument Lists: PHP allows functions to accept a variable number of arguments using ... (variadic functions).

function sum(...$numbers) {
    return array_sum($numbers);
}

echo sum(1, 2, 3); // Outputs: 6
echo sum(4, 5, 6, 7); // Outputs: 22\

?>