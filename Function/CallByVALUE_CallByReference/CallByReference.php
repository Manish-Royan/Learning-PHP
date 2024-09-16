<?php

/* 
- Call by Reference: When a variable is passed to a function by reference, the function receives a reference to the original variable. Any changes made to the variable inside the function directly affect the original variable outside the function.

- To pass a variable by reference, use the `&` symbol before the variable name in the function definition.
*/

function incrementByReference(&$num) {
    $num++;
    echo "Inside function: $num\n";
}

$number = 5;
incrementByReference($number);
echo "Outside function: $number\n";

    /* Output:
        Inside function: 6
        Outside function: 6
    */
    
/*Explanation:
    * Inside the function, $num is a reference to `$number`.
    * Incrementing `$num` directly changes $number.
*/

?>