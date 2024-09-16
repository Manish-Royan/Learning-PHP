<?php
// Passing Arguments by Reference: By default, function arguments are passed by value (a copy is made). To pass by reference, use the & operator.

function addFive(&$value) {
    $value += 5;
}

$num = 10;
addFive($num);
echo $num; // Outputs: 15

?>