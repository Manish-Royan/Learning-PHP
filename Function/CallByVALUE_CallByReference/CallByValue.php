<?php

//Call by Value: When a variable is passed to a function by value, a copy of the variable's value is made and used within the function. This means any changes made to the variable inside the function do not affect the original variable outside the function.

    function incrementByValue($num) {
        $num++;
        echo "Inside function: $num\n";
    }
    
    $number = 5;
    incrementByValue($number);
    echo "Outside function: $number\n";

    /* Output:
        Inside function: 6
        Outside function: 5
    */

    /*Explanation:
        * Inside the function, $num is a copy of $number.
        * Incrementing $num does not change $number.
    */
    
?>