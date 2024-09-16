<?php

//i.Memory Usage:
    // * Call by Value: Creates a copy of the variable, using more memory.
    // * Call by Reference: No copy is made, conserving memory.

//ii.Function Definition:

    // * Call by Value: Normal parameter declaration
    function fool($param) { /* ... */ }

    // * Call by Reference: Use `&` before the parameter name.
    function foo(&$param) { /* ... */ }

//iii.Side Effects:

    // * Call by Value: Changes inside the function do not affect the original variable.
    // * Call by Reference: Changes inside the function affect the original variable.

//iv. Side Effects:

    // * Call by Value: Use when you do not want the original variable to be modified.
    function printDouble($num) {
        $num *= 2;
        echo $num;
    }
    
    // * Call by Reference: Use when you need the function to modify the original variable.
    function double(&$num) {
        $num *= 2;
    }

    
//v. Different Contexts:
    // * Swapping Values: Using call by reference:
    function swap(&$a, &$b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    
    $x = 1;
    $y = 2;
    swap($x, $y);
    echo "x = $x, y = $y"; // Outputs: x = 2, y = 1


    // *Modifying Arrays: Using call by reference to modify array elements 
    function appendElement(&$arr, $element) {
        $arr[] = $element;
    }
    
    $array = [1, 2, 3];
    appendElement($array, 4);
    print_r($array); // Outputs: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 )
    
    






?>